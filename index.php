<?php

    $links = ['Indroduzione','Norme sulla privacy', 'Termini del servizio', 'Tecnologie', 'Domande frequenti']; 

    $faqs = [

        'faq-1' => [
            'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            'answer' => [ 
                "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
                "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
                "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
            ]
            
        ],

         'faq-2' => [
            'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
            'answer' => [
                "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
                "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
                "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
                "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
            ]
           
         ],

        'faq-3' => [
            'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
            'answer' => [
                "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.",
            ]
                
        ],

        'faq-4' => [
            'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
            'answer' => ["In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
             ]
        ]
       
    ];

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FAQ</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container flex">
                <img class="logo" src="data:image/png;base64,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" alt="google-logo">
                <span class="logo-text"> PRIVACY & TERMINI </span>
            </div>
            
            <ul class="flex">
                <?php 
                    // cicla ogni elemento quanta la lunghezza di links
                    for($i = 0; $i < count($links); $i++){?>
                    <!-- <?php var_dump($links[$i]) ?> -->
                    <!-- stampa una li ogni elemento presente nell'array -->
                    <a class="link" href="#">
                        <li class="header-menu-item">
                            <?php echo $links[$i] ?>
                        </li>
                    </a>
                <?php } ?>
            </ul>
            
        </div>
    </header>
    <main>
        <div class="faq-container">
            <ul>
                <!-- per ogni elemento all'interno di dell'array faqs valuta cosa c'è all' interno della key -->
                <?php foreach ($faqs as $key => $faq )  { ?>
                    
                    <h2><?php echo  $faq['question'] ?></h2>
                    <!-- cicla tutto l'array $faq finchè non raggiungi la lunghezza dell'array faq/sezione/answer -->
                    <?php for($i = 0; $i < count($faq['answer']); $i++) {?>
                        <!-- ogni singolo elemento del ciclo for di faq['answer'] viene inserito in una variabile -->
                        <?php $answer = ($faq['answer'][$i])?>
                        <!-- viene stampata una singola li per ogni elemento presente nell'array $faq -->
                        <li class="answer-list-item"><?php echo $answer?></li>
                        
                    <?php } ?>
                <?php }?> 
            </ul>  
        </div>
    </main>
   
       
</body>
</html>