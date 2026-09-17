<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function blog()
    {
        return view('blog', ['posts' => $this->posts()]);
    }

    public function blogShow($id)
    {
        $post = collect($this->posts())->firstWhere('id', $id);

        return view('blog-show', compact('post'));
    }

    private function posts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Architettura modulare per progetti software scalabili',
                'date' => '10 settembre 2026',
                'content' => 'Costruire applicazioni capaci di crescere nel tempo richiede rigore e una visione strutturale solida fin dalla prima riga di codice. Quando un progetto digitale comincia a espandersi, la complessita tecnica aumenta in modo esponenziale e solo una netta separazione tra dati, logica di elaborazione e presentazione visiva puo evitare il collasso del sistema.

                Organizzare la base di codice in moduli del tutto autonomi favorisce la collaborazione quotidiana e rende la manutenzione ordinaria un compito lineare. Invece di concentrare compiti eterogenei dentro file giganti e ingestibili, distribuire le responsabilita permette di circoscrivere i problemi nel momento esatto in cui emergono. In questo modo ogni membro del team puo intervenire su una specifica funzione senza il timore di compromettere il lavoro dei colleghi.
                
                Scegliere pattern strutturali chiari riduce drasticamente il tempo impiegato nella ricerca e correzione di regressioni impreviste durante i rilasci. Mantenere il codice pulito e ordinato rappresenta il miglior investimento possibile per garantire longevita, efficienza e sostenibilita economica a qualunque piattaforma digitale.',
            ],
            [
                'id' => 2,
                'title' => 'Strategie pratiche per massimizzare la velocita sul web',
                'date' => '3 settembre 2026',
                'content' => 'Le prestazioni di una pagina web determinano in modo diretto la soddisfazione del pubblico e il posizionamento sui motori di ricerca. Ridurre il peso delle risorse grafiche, minimizzare i file JavaScript ed eliminare le dipendenze inutili consente di servire schermate veloci anche a utenti con connessioni lente o instabili.

                Ottimizzare la fase di rendering richiede una attenzione costante verso il comportamento del browser. Configurare una efficace memorizzazione temporanea sul server, posticipare il caricamento delle risorse secondarie e frammentare i pacchetti di codice sono passaggi cruciali per assicurare una navigazione fluida e priva di intoppi.
                
                Ogni frazione di secondo risparmiata durante la visualizzazione iniziale trattiene visitatori preziosi e riduce sensibilmente il tasso di abbandono su ogni dispositivo. La velocita non deve mai essere trattata come una rifinitura secondaria, ma come un requisito tecnico centrale da misurare e difendere durante ogni fase del ciclo di vita del progetto.',
            ],
            [
                'id' => 3,
                'title' => 'Cultura del test e documentazione continua nel team',
                'date' => '27 agosto 2026',
                'content' => 'La qualita finale di una applicazione dipende dai processi di controllo implementati prima del rilascio sui server di produzione. Introdurre una serie di controlli automatici consente di individuare anomalie nascoste prima che raggiungano gli utenti finali, proteggendo la reputazione del marchio e la continuita del servizio.

                Scrivere controlli unitari e verifiche di integrazione crea una rete di protezione indispensabile quando si modifica una sezione critica del software. Sapere con certezza matematica che le funzionalita storiche continuano a operare senza errori permette di rilasciare aggiornamenti continui con serenita e frequenza elevata.
                
                Accompagnare il codice sorgente con convenzioni di scrittura uniformi e una documentazione chiara facilita la comprensione della struttura complessiva. Questo metodo di lavoro consente a qualunque nuovo collega di integrarsi rapidamente nei compiti quotidiani, evitando fraintendimenti e proteggendo il valore del lavoro costruito nel tempo.',
            ],
        ];
    }

    public function chiSiamo()
    {

        $team = [
            [
                'id' => 1,
                'nome' => 'Michele Giovanni Noviello',
                'ruolo' => 'CEO',
                'descrizione' => 'Michele è il fondatore e CEO della nostra azienda. Con oltre 20 anni di esperienza nel settore, guida il team con passione e dedizione.',
                'immagine' => 'media/michele.jpg',
            ],
            [
                'id' => 2,
                'nome' => 'Fabio Spanò',
                'ruolo' => 'Operations Manager',
                'descrizione' => "Fabio è il nostro Operations Manager. È responsabile della gestione operativa e dell'efficienza dei processi aziendali.",
                'immagine' => 'media/fabio.jpg',
            ],
            [
                'id' => 3,
                'nome' => 'Damiano Ricci',
                'ruolo' => 'Ingegnere del Software',
                'descrizione' => "Damiano è l'ingegnere del software della nostra azienda. Si occupa dello sviluppo e della manutenzione delle nostre applicazioni.",
                'immagine' => 'media/damiano.jpg',
            ],
            [
                'id' => 4,
                'nome' => 'Gabriele Nunnari',
                'ruolo' => 'Art Director',
                'descrizione' => 'Gabriele gestisce le strategie di marketing e comunicazione, assicurando che il nostro messaggio raggiunga il pubblico giusto.',
                'immagine' => 'media/gabriele.jpg',
            ],
        ];

        return view('chi-siamo', ['team' => $team]);
    }

    public function chiSiamoShow($id)
    {

        $team = [
            [
                'id' => 1,
                'nome' => 'Michele Giovanni Noviello',
                'ruolo' => 'CEO',
                'descrizione' => 'Michele è il fondatore e CEO della nostra azienda. Con oltre 20 anni di esperienza nel settore, guida il team con passione e dedizione.',
                'immagine' => 'media/michele.jpg',
            ],
            [
                'id' => 2,
                'nome' => 'Fabio Spanò',
                'ruolo' => 'Operations Manager',
                'descrizione' => "Fabio è il nostro Operations Manager. È responsabile della gestione operativa e dell'efficienza dei processi aziendali.",
                'immagine' => 'media/fabio.jpg',
            ],
            [
                'id' => 3,
                'nome' => 'Damiano Ricci',
                'ruolo' => 'Ingegnere del Software',
                'descrizione' => "Damiano è l'ingegnere del software della nostra azienda. Si occupa dello sviluppo e della manutenzione delle nostre 'MILLEMILA' applicazioni.",
                'immagine' => 'media/damiano.jpg',
            ],
            [
                'id' => 4,
                'nome' => 'Gabriele Nunnari',
                'ruolo' => 'Art Director',
                'descrizione' => 'Gabriele gestisce le strategie di marketing e comunicazione, assicurando che il nostro messaggio raggiunga il pubblico giusto.',
                'immagine' => 'media/gabriele.jpg',
            ],
        ];

        foreach ($team as $member) {
            if ($id == $member['id']) {

                return view('chi-siamo-show', ['member' => $member]);
            }
        }

        return view('chi-siamo-show', ['team' => $team]);
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function contattiSubmit(Request $request)
    {
        // 1. Valida i dati del form
        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Invia l'email usando la classe Mailable corretta (ContactFormMail)
        Mail::to('hello@example.com')->send(new ContactFormMail($validated));
        // 2. Torna indietro alla pagina dei contatti con un messaggio di successo
        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
    }
