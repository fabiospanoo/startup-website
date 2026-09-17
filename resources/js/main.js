document.documentElement.classList.add('hide-scrollbar');

const navbar = document.querySelector('.navbar-custom');

window.addEventListener('scroll', () => {
    if (!navbar) return;

    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}, { passive: true });

function initNetworkAnimation() {
    const canvas = document.getElementById('network');

    if (!canvas) return;

    const docStyle = getComputedStyle(document.documentElement);
    const bodyBackground = getComputedStyle(document.body).backgroundColor;
    const lineColor = docStyle.getPropertyValue('--clr-muted-teal').trim() || '#84a98c';
    const ctx = canvas.getContext('2d');
    const circuits = [];
    const particles = [];
    const MAX_CIRCUITS = 28;
    const MAX_PARTICLES = 35;

    let width = 0;
    let height = 0;

    function random(min, max) {
        return Math.random() * (max - min) + min;
    }

    function randomInt(min, max) {
        return Math.floor(random(min, max + 1));
    }

    function resizeCanvas() {
        const rect = canvas.getBoundingClientRect();

        width = canvas.width = Math.max(1, Math.round(rect.width || window.innerWidth));
        height = canvas.height = Math.max(1, Math.round(rect.height || window.innerHeight));
    }

    function getEdgePoint() {
        const side = randomInt(0, 3);

        if (side === 0) return { x: random(0, width), y: 0 };
        if (side === 1) return { x: width, y: random(0, height) };
        if (side === 2) return { x: random(0, width), y: height };

        return { x: 0, y: random(0, height) };
    }

    function getInitialDirection(point) {
        if (point.x <= 0) return 'right';
        if (point.x >= width) return 'left';
        if (point.y <= 0) return 'down';
        return 'up';
    }

    function createCircuit() {
        const start = getEdgePoint();
        const points = [];
        let x = start.x;
        let y = start.y;
        points.push({ x, y });

        let direction = getInitialDirection(start);
        const segments = randomInt(4, 9);

        for (let i = 0; i < segments; i++) {
            if (i > 0) {
                if (direction === 'left' || direction === 'right') {
                    direction = Math.random() < 0.5 ? 'up' : 'down';
                } else {
                    direction = Math.random() < 0.5 ? 'left' : 'right';
                }
            }

            const length = random(90, 180);

            if (direction === 'right') x += length;
            if (direction === 'left') x -= length;
            if (direction === 'down') y += length;
            if (direction === 'up') y -= length;

            points.push({ x, y });
        }

        return {
            points,
            progress: 0,
            speed: random(0.00045, 0.0009),
            opacity: 0,
            life: 0,
            maxLife: random(120, 260),
            state: 'growing',
            lineWidth: random(0.9, 1.5),
        };
    }

    function calculatePath(circuit) {
        let totalLength = 0;
        const lengths = [];

        for (let i = 0; i < circuit.points.length - 1; i++) {
            const point1 = circuit.points[i];
            const point2 = circuit.points[i + 1];
            const length = Math.hypot(point2.x - point1.x, point2.y - point1.y);
            lengths.push(length);
            totalLength += length;
        }

        circuit.segmentLengths = lengths;
        circuit.totalLength = totalLength;
    }

    function getPointAtDistance(circuit, distance) {
        let remaining = distance;

        for (let i = 0; i < circuit.segmentLengths.length; i++) {
            const segmentLength = circuit.segmentLengths[i];

            if (remaining <= segmentLength) {
                const point1 = circuit.points[i];
                const point2 = circuit.points[i + 1];
                const percent = remaining / segmentLength;

                return {
                    x: point1.x + (point2.x - point1.x) * percent,
                    y: point1.y + (point2.y - point1.y) * percent,
                };
            }

            remaining -= segmentLength;
        }

        return circuit.points[circuit.points.length - 1];
    }

    function createParticle(circuit) {
        return {
            circuit,
            distance: random(0, circuit.totalLength),
            speed: random(0.12, 0.30),
            size: random(0.7, 1.2),
            opacity: random(0.3, 0.7),
        };
    }

    function spawnCircuit() {
        if (circuits.length >= MAX_CIRCUITS) return;

        const circuit = createCircuit();
        calculatePath(circuit);
        circuits.push(circuit);

        if (particles.length < MAX_PARTICLES) {
            particles.push(createParticle(circuit));
        }
    }

    function drawCircuit(circuit) {
        const visibleLength = circuit.totalLength * circuit.progress;
        let remaining = visibleLength;

        ctx.beginPath();
        ctx.moveTo(circuit.points[0].x, circuit.points[0].y);

        for (let i = 0; i < circuit.segmentLengths.length; i++) {
            const point1 = circuit.points[i];
            const point2 = circuit.points[i + 1];
            const length = circuit.segmentLengths[i];

            if (remaining >= length) {
                ctx.lineTo(point2.x, point2.y);
                remaining -= length;
            } else {
                const percent = remaining / length;
                ctx.lineTo(
                    point1.x + (point2.x - point1.x) * percent,
                    point1.y + (point2.y - point1.y) * percent
                );
                break;
            }
        }

        ctx.strokeStyle = lineColor;
        ctx.lineWidth = circuit.lineWidth;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        ctx.shadowColor = lineColor;
        ctx.shadowBlur = 6;
        ctx.stroke();
        ctx.shadowBlur = 0;

        let traveled = 0;

        for (let i = 0; i < circuit.points.length; i++) {
            if (traveled > visibleLength) break;

            const point = circuit.points[i];
            ctx.beginPath();
            ctx.arc(point.x, point.y, 2.2, 0, Math.PI * 2);
            ctx.fillStyle = lineColor;
            ctx.fill();

            if (i < circuit.segmentLengths.length) {
                traveled += circuit.segmentLengths[i];
            }
        }
    }

    function drawParticles() {
        for (const particle of particles) {
            const circuit = particle.circuit;

            if (!circuits.includes(circuit)) continue;

            const visibleLength = circuit.totalLength * circuit.progress;
            if (particle.distance > visibleLength) continue;

            const point = getPointAtDistance(circuit, particle.distance);
            ctx.beginPath();
            ctx.arc(point.x, point.y, particle.size * 1.8, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(180, 245, 228, ${Math.min(1, particle.opacity + 0.3)})`;
            ctx.fill();
        }
    }

    function updateParticles() {
        for (let i = particles.length - 1; i >= 0; i--) {
            const particle = particles[i];

            if (!circuits.includes(particle.circuit)) {
                particles.splice(i, 1);
                continue;
            }

            particle.distance += particle.speed;

            if (particle.distance >= particle.circuit.totalLength) {
                particle.distance = 0;
            }
        }
    }

    function updateCircuits() {
        for (let i = circuits.length - 1; i >= 0; i--) {
            const circuit = circuits[i];

            if (circuit.state === 'growing') {
                circuit.progress += circuit.speed;
                circuit.opacity = Math.min(0.8, circuit.opacity + 0.012);

                if (circuit.progress >= 1) {
                    circuit.progress = 1;
                    circuit.state = 'alive';
                }
            } else if (circuit.state === 'alive') {
                circuit.life++;

                if (circuit.life >= circuit.maxLife) {
                    circuit.state = 'fading';
                }
            } else if (circuit.state === 'fading') {
                circuit.opacity -= 0.008;

                if (circuit.opacity <= 0) {
                    circuits.splice(i, 1);
                }
            }
        }
    }

    function animate() {
        ctx.fillStyle = bodyBackground;
        ctx.fillRect(0, 0, width, height);

        if (Math.random() < 0.035) {
            spawnCircuit();
        }

        updateCircuits();
        updateParticles();

        for (const circuit of circuits) {
            drawCircuit(circuit);
        }

        drawParticles();
        requestAnimationFrame(animate);
    }

    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    for (let i = 0; i < 18; i++) {
        spawnCircuit();
    }

    animate();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initNetworkAnimation);
} else {
    initNetworkAnimation();
}

const backToTopBtn = document.getElementById('backToTop');

        if (backToTopBtn) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.add('show');
                } else {
                    backToTopBtn.classList.remove('show');
                }
            });

            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }