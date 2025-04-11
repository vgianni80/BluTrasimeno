<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blu Trasimeno - Casa Vacanze</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta name="description" content="Blu Trasimeno: accogliente casa vacanza immersa nella natura, a pochi passi dal Lago Trasimeno. Scopri la tua prossima vacanza in Umbria.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="./css/pers.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LodgingBusiness",
      "name": "Blu Trasimeno Casa Vacanze",
      "url": "https://www.blutrasimeno.it",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Via Paolo Borsellino 5",
        "addressLocality": "Tuoro sul Trasimeno",
        "postalCode": "06069",
        "addressCountry": "IT"
      },
      "telephone": "+39 338 9578659"
    }
    </script>    
</head>
<body class="bg-white dark:bg-gray-500">
    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex justify-between items-center">
        <div>
            <p class="mb-2 lang">
                <a href="#" class='underline'>Scopri di più</a>" 
                    data-en="We use cookies to improve your browsing experience. 
                    data-it="Utilizziamo i cookie per migliorare la tua esperienza di navigazione. 
                <a href='#' class='underline'>Learn more</a>">
            </p>
        </div>
        <div>
            <button id="accept-cookies" class="bg-sky-600 text-black px-4 py-2 mr-2 rounded lang" data-it="Accetta tutti" data-en="Accept all"></button>
            <button id="manage-cookies" class="border border-white px-4 py-2 rounded lang" data-it="Gestisci" data-en="Manage"></button>
        </div>
    </div>

    <!-- Privacy Overlay -->
    <div id="privacy-overlay" class="privacy-overlay">
        <div class="bg-white p-8 rounded-lg max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4 lang" data-it="Informativa Privacy" data-en="Privacy Policy"></h2>
            <div class="max-h-96 overflow-y-auto mb-4">
                <h3 class="font-semibold mb-2 lang" data-it="Informativa ai sensi del Regolamento UE 2016/679 (GDPR)" data-en="Information pursuant to EU Regulation 2016/679 (GDPR)"></h3>
                <p class="mb-2 lang" data-it="Blu Trasimeno tratta i dati personali nel rispetto della normativa vigente. I dati forniti saranno utilizzati per:" data-en="Blu Trasimeno processes personal data in compliance with current regulations. The data provided will be used for:"></p>
                <ul class="list-disc list-inside mb-2">
                    <li class="lang" data-it="Gestione della prenotazione" data-en="Booking management"></li>
                    <li class="lang" data-it="Comunicazioni relative al soggiorno" data-en="Communications related to the stay"></li>
                    <li class="lang" data-it="Eventuale invio di materiale promozionale" data-en="Possible sending of promotional material"></li>
                </ul>
                <p class="lang" data-it="Il conferimento dei dati è obbligatorio per le finalità di gestione della prenotazione. Il mancato consenso non permetterà di procedere." data-en="Providing data is mandatory for booking management purposes. Failure to consent will not allow proceeding."></p>
            </div>
            <form id="privacy-form">
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" id="privacy-consent" class="mr-2" required>
                        <span class="lang" data-it="Dichiaro di aver letto e accettato l'informativa privacy" data-en="I declare that I have read and accepted the privacy policy"></span>
                    </label>
                </div>
                <div class="flex justify-between">
                    <button type="button" id="close-privacy" class="bg-gray-300 text-black px-4 py-2 rounded lang" data-it="Chiudi" data-en="Close"></button>
                    <button type="submit" class="bg-yellow-500 text-black px-4 py-2 rounded lang" data-it="Accetta" data-en="Accept"></button>
                </div>
            </form>
        </div>
    </div>

    <header class="hero-bg h-screen relative text-white">
        <div id="header-carousel" class="header-carousel">
            <div class="carousel-item active" style="background-image: url('./assets/img/copertina01.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina02.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina03.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina04.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina05.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina06.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina07.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina08.jpg');"></div>
            <div class="carousel-item" style="background-image: url('./assets/img/copertina09.jpg');"></div>

            <!-- Frecce di navigazione -->
            <button id="prev-slide" class="carousel-nav carousel-nav-prev">&lt;</button>
            <button id="next-slide" class="carousel-nav carousel-nav-next">&gt;</button>
        </div>
        <nav class="p-6 flex justify-between items-center">
            <div class="flex items-center">
                <div>
                    <a href="#" class="hover-highlight mx-4 lang" data-it="Home" data-en="Home"></a>
                    <a href="#camere" class="mx-4 hover-highlight lang" data-it="L'appartamento" data-en="Rooms"></a>
                    <a href="#posizione" class="mx-4 hover-highlight lang" data-it="La Posizione" data-en="Location"></a>
                    <a href="#servizi" class="mx-4 hover-highlight lang" data-it="Servizi" data-en="Services"></a>
                    <a href="#contatti" class="mx-4 hover-highlight lang" data-it="Contatti" data-en="Contact"></a>
                </div>
                <div class="language-selector ml-4">
                    <div id="language-select" class="cursor-pointer flex items-center relative">
                        <!-- Aggiungi "relative" qui per creare un contesto di posizionamento -->
                        <span id="current-language" class="text-white flex items-center">
                            <img src="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/flags/4x3/it.svg"  style="height: 16px; width: auto;" alt="Lingua" 
                                class="w-5 h-4 mr-2" />
                        </span>
                        <div id="language-dropdown" class="hidden absolute bg-white text-black shadow-lg rounded mt-2 z-50 right-0">
                            <!-- Aggiungi "right-0" qui per allinearlo a destra -->
                            <span class="language-option cursor-pointer px-4 p-2 hover:bg-gray-200 flex items-center" data-lang="it">
                                <img src="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/flags/4x3/it.svg" alt="Italiano" style="height: 16px; width: auto;">
                                Italiano
                            </span>
                            <span class="language-option cursor-pointer px-4 p-2 hover:bg-gray-200 flex items-center" data-lang="en">
                                <img src="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/flags/4x3/gb.svg" alt="English" style="height: 16px; width: auto;">
                                English
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="absolute inset-0 flex items-center justify-center text-center header-overlay">
            <div class="items-center justify-center text-center">
                <img width="300" height="300" src="./assets/loghi/logoBT_Trasparente.png" />
                <p class="text-xl mb-8 lang" data-it="Il tuo rifugio di pace in Umbria" data-en="Your peaceful retreat in Umbria"></p>
                <a id="linkPrenotazione" href="#" class="bg-sky-600 text-black px-6 py-3 rounded-full hover:bg-yellow-600 lang" data-it="Prenota Ora" data-en="Book Now"></a>
            </div>
        </div>
    </header>

    <!-- La Casa Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto px-4">
            <div class="about-text">
                <div class="section-title justify-center items-center w-full h-auto">
                    <!-- <h2>Benvenuti a Blu Trasimeno</h2> -->
                    <h2 class="text-4xl text-center mb-12 font-semibold lang text-sky-600" data-it="La tua oasi di pace sul lago" data-en="Your italian paceful oasi"></h2>
                    <p>Benvenuti a Blu Trasimeno, un'incantevole casa vacanze situata nel caratteristico borgo di Tuoro sul Trasimeno. La nostra struttura offre un rifugio perfetto per chi desidera trascorrere momenti indimenticabili immerso nella bellezza naturale dell'Umbria e del famoso Lago Trasimeno.</p>
                    <br/>
                    <p>La casa, recentemente ristrutturata con materiali di pregio e finiture di qualità, mantiene l'autenticità della tradizione umbra combinandola con tutti i comfort moderni. Gli spazi ampi e luminosi, l'arredamento curato nei minimi dettagli e l'atmosfera accogliente rendono Blu Trasimeno il luogo ideale per vacanze in famiglia o con gli amici.</p>
                    <br/>
                    <p>L’appartamento dispone altresì di una cucina atrezzata di tutto:
                        piano cottura, frigo, forno, microonde, bollitore, tostapane, stoviglie e pentole di ogni genere… macchina per caffè espresso e cialde.
                    </p>
                    <br/>
                    <p>Il giardino privato offre uno spazio all'aperto perfetto per fare colazione, fare un barbecue, o semplicemente per rilassarsi e godersi la tranquillità dell'Umbria.</p>
                    <br/>
                    <p>Tutte le stanze sono dotate di climatizzatore. Comfort moderni e attenzioni speciali per rendere il tuo soggiorno indimenticabile.</p>
                </div>                    
            </div>
        </div>
    </section>

    <section id="camere" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl text-center mb-12 font-semibold lang text-sky-600" data-it="Il Nostro Appartamento" data-en="Our Apartment"></h2>
            <div class="grid md:grid-cols-3 gap-8 mx-auto h-auto justify-center">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina15.jpg" alt="Soggiorno-Cucina" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="Il Soggiorno" data-en="Family Room"></h3>
                        <p class="lang" 
                            data-it="Un ambiente accogliente e rilassante, perfetto per leggere un libro o sorseggiare un caffè, con vista diretta sul verde del giardino: un invito alla tranquillità." 
                            data-en="Spacious family room with two beds and living area.">
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina21.jpg" 
                        alt="Soggiorno-Cucina" class="w-full h-64 object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="La Cucina" data-en="Family Room"></h3>
                        <p class="lang" 
                            data-it="Una cucina moderna e funzionale, dotata di tutto il necessario per preparare piatti gustosi anche in vacanza. Spazio, comfort e praticità al tuo servizio." 
                            data-en="Spacious family room with two beds and living area.">
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina08.jpg"  alt="Camera Blu" class="w-full h-64 object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="Camera Blu" data-en="Double Room"></h3>
                        <p class="lang" 
                        data-it="Ampia, elegante e baciata dalla luce naturale: la camera ideale per un riposo rigenerante, tra stile e comodità." 
                        data-en="Spacious room with panoramic view of the Tuscan countryside.">
                    </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina35.jpg" 
                        alt="Camera Arancio" class="w-full h-64 object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="Camera Arancio" data-en="Second Room"></h3>
                        <p class="lang" 
                            data-it="Perfetta per coppie o ragazzi, questa camera offre un letto alla francese e un’atmosfera calda e accogliente, ideale per sentirsi subito a casa." 
                            data-en="Luxurious suite with private terrace and jacuzzi.">
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina03.jpg" 
                        alt="Il Bagno" class="w-full h-64 object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="Il Bagno" data-en="Family Room"></h3>
                        <p class="lang" data-it="Design moderno, grande luminosità e cura dei dettagli: un bagno pensato per il tuo benessere quotidiano." data-en="Spacious family room with two beds and living area."></p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./assets/img/copertina30.jpg" 
                        alt="Il Giardino" class="w-full h-64 object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 lang" data-it="Il Giardino" data-en="Family Room"></h3>
                        <p class="lang" 
                            data-it="Un angolo all'aperto tutto per te. Ideale per rilassarsi al sole, gustare un aperitivo o organizzare una grigliata con il barbecue a disposizione. Il luogo perfetto per vivere l’aria aperta in totale tranquillità." 
                            data-en="Spacious family room with two beds and living area.">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="posizione" class="py-4 bg-gray-100">
    </section>

    <!-- Servizi Section -->
    <section id="servizi" class="py-16">
        <div class="container mx-auto px-4">
            <div class="section-title">
                <h2 class="text-4xl text-center mb-12 font-semibold lang" data-it="I Nostri Servizi" data-en="Our services"></h2>
                <p class="justify-center text-center">Comfort moderni e attenzioni speciali per rendere il tuo soggiorno indimenticabile</p>
                <br/>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Wi-Fi Gratuito</h3>
                        <p>Connessione internet ad alta velocità disponibile in tutta la casa per rimanere sempre connessi.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-parking"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Parcheggio Privato</h3>
                        <p>Ampio spazio per parcheggiare la tua auto in sicurezza all'interno della proprietà.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Accesso al Lago</h3>
                        <p>A pochi passi dalla casa potrai accedere al lago per nuotare o praticare sport acquatici. Numerose attività e escursioni per tutti i gusti.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Cucina Attrezzata</h3>
                        <p>Cucina moderna completamente attrezzata con elettrodomestici di qualità e tutti gli utensili necessari.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Climatizzazione</h3>
                        <p>Sistema di climatizzazione in tutta la casa per garantire il massimo comfort in ogni stagione.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Smart TV</h3>
                        <p>TV a schermo piatto con canali satellitari e servizi di streaming per il tuo intrattenimento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contatti" class="py-16 bg-gray-100">
        <h2 class="text-4xl text-center mb-12 font-semibold lang" data-it="Contattaci" data-en="Contact Us"></h2>
        <div class="container mx-auto px-4 shadow-lg rounded-lg bg-white content-start gap-4 flex flex-col justify-center" >
            <div class="mappa-responsive">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.9919107482947!2d12.075448512323605!3d43.204328681225455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132c011ccb168fcd%3A0x66568c4ce2b33a57!2sBlu%20Trasimeno%20-%20Casa%20Vacanze%20CIN%3A%20IT054055C204034007!5e1!3m2!1sit!2sit!4v1743186738011!5m2!1sit!2sit"
                    width="1920" height="1400" style="border:0;" allowfullscreen="allowfullscreen" aria-hidden="false"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="py-16 justify-center items-center mx-auto">
                <form id="contact-form" action="mail.php" method="POST">
                    <div class="mb-4">
                        <label class="block mb-2 lang" data-it="Nome" data-en="Name"></label>
                        <input type="text" name="nome" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 lang" data-it="Email" data-en="Email"></label>
                        <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 lang" data-it="Messaggio" data-en="Message"></label>
                        <textarea name="messaggio" class="w-full px-3 py-2 border rounded-lg" rows="4" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="privacy" required class="mr-2">
                            <span class="lang" data-it="Accetto il trattamento dei dati personali" data-en="I accept the processing of personal data"></span>
                        </label>
                    </div>
                    <input type="hidden" name="language" id="current-lang-input" value="it">
                    <button type="submit" class="bg-sky-500 text-black px-6 py-3 rounded-full hover:bg-sky-600 w-full lang" data-it="Invia Messaggio" data-en="Send Message"></button>
                </form>
                <br/>
                <script src="https://static.elfsight.com/platform/platform.js" async></script>
                <div class="elfsight-app-81400eae-4b93-481c-bb1b-73f0bc96ba5b" data-elfsight-app-lazy></div>
            </div>
        </div>
    </section>

    <section id="prenota-dialog" class="prenota-dialog">
        <div class="container mx-auto bg-white shadow-lg rounded-lg" style="overflow: auto;padding: 0 1.5rem;width: 100%;display: flex;justify-content: center;">
            <br/>
            <p class="mx-auto justify-center font-semibold">Fai click sulla foto per i dettagli e prenotare</p>
            <iframe 
                id="host-websites-widget"
                src="https://widget.holiduhost.com/widget/955c2e5e-6ed5-41ab-8b92-a6846758c6a5">
            </iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container mx-auto justify-center">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">Blu Trasimeno</div>
                    <p class="footer-text">Un'oasi di pace e relax sulle rive del Lago Trasimeno, dove la tradizione umbra incontra il comfort moderno per regalarti una vacanza indimenticabile.</p>
                </div>
                <div class="footer-column">
                    <h3 class="footer-title">Link Utili</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">La Casa</a></li>
                        <li><a href="#features">Servizi</a></li>
                        <li><a href="#gallery">Galleria</a></li>
                        <li><a href="#contact">Contatti</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-title">Dintorni</h3>
                    <ul class="footer-links">
                        <li><a href="https://www.lagotrasimeno.net/" target="_blank">Lago Trasimeno</a></li>
                        <li><a href="https://www.lagotrasimeno.net/it/il-parco-e-le-sue-isole-s6" target="_blank">Il Parco e le sue Isole</a></li>
                        <li><a href="https://www.lagotrasimeno.net/it/itinerari-m4" target="_blank">Itinerari e Tour sul Lago Trasimeno</a></li>
                        <li><a href="http://www.perugiaonline.it/" target="_blank">Perugia</a></li>
                        <li><a href="https://www.visit-assisi.it/" target="_blank">Assisi</a></li>
                        <li><a href="https://www.turiscortona.it/" target="_blank">Cortona</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p class="lang" data-it="&copy; <?php echo date("Y"); ?> Blu Trasimeno. Tutti i diritti riservati." data-en="© 2025 Blu Trasimeno. All rights reserved."></p>
                <p>CIN: IT054055C204034007</p>
                <div class="mt-4">
                <a href="#" class="mx-2 hover-highlight lang" data-it="Privacy" data-en="Privacy"></a>
                <a href="#" class="mx-2 hover-highlight lang" data-it="Termini" data-en="Terms"></a>
                <a href="#" class="mx-2 hover-highlight lang" data-it="Contatti" data-en="Contact"></a>
            </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Language Management
            const languageSelect = document.getElementById('language-select');
            const languageDropdown = document.getElementById('language-dropdown');
            const languageOptions = document.querySelectorAll('.language-option');

            const currentLanguage = document.getElementById('current-language');
            const dropdown = document.getElementById("language-dropdown");
            const toggle = document.getElementById("language-select");
            const options = document.querySelectorAll(".language-option");
        
            // Cookie and Privacy Management
            const cookieBanner = document.getElementById('cookie-banner');
            const acceptCookiesBtn = document.getElementById('accept-cookies');
            const manageCookiesBtn = document.getElementById('manage-cookies');
            const privacyOverlay = document.getElementById('privacy-overlay');
            const prenotaDialog = document.getElementById('prenota-dialog');
            const prenotaContent = prenotaDialog.querySelector('.container');
            const closePrivacyBtn = document.getElementById('close-privacy');
            const privacyForm = document.getElementById('privacy-form');
            const contactForm = document.getElementById('contact-form');

            const carouselItems = document.querySelectorAll(".carousel-item");
            const prevButton = document.getElementById("prev-slide");
            const nextButton = document.getElementById("next-slide");
            let currentIndex = 0;
            let slideInterval; // Per gestire l'intervallo

            // Mostra/nasconde il menu quando clicchi sul selettore
            toggle.addEventListener("click", function (e) {
                dropdown.classList.toggle("hidden");
            });

            // Aggiunge il comportamento per ogni opzione lingua
            options.forEach(option => {
                option.addEventListener("click", function () {
                    const lang = this.getAttribute("data-lang");

                    // Chiude il dropdown
                    dropdown.classList.add("hidden");

                    // Cambia lingua via URL
                    const url = new URL(window.location.href);
                    url.searchParams.set("lang", lang);
                    window.location.href = url;
                });
            });

            // Chiude il menu cliccando fuori
            document.addEventListener("click", function (event) {
                if (!toggle.contains(event.target)) {
                    dropdown.classList.add("hidden");
                }
            });

            document.getElementById('linkPrenotazione').addEventListener('click', function(e) {
                e.preventDefault(); // Impedisce la navigazione predefinita
                prenotazione();
            }); 

            function nextSlide() {
                // Rimuove la classe active dall'elemento corrente
                carouselItems[currentIndex].classList.remove("active");        
                // Passa al prossimo elemento
                currentIndex = (currentIndex + 1) % carouselItems.length;  
                // Aggiunge la classe active al nuovo elemento corrente
                carouselItems[currentIndex].classList.add("active");
            }
            function prevSlide() {
                // Remove active class from current element
                carouselItems[currentIndex].classList.remove("active");
                // Move to previous element
                currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;        
                // Add active class to new current element
                carouselItems[currentIndex].classList.add("active");
            }

            function startSlideShow() {
                // Avvia la rotazione automatica - chiama nextSlide ogni 5 secondi
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopSlideShow() {
                // Ferma la rotazione automatica
                clearInterval(slideInterval);
            }
            // Gestione eventi per i pulsanti
            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    stopSlideShow(); // Ferma l'automatismo quando si clicca manualmente
                    prevSlide();
                    startSlideShow(); // Riavvia l'automatismo
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', function() {
                    stopSlideShow(); // Ferma l'automatismo quando si clicca manualmente
                    nextSlide();
                    startSlideShow(); // Riavvia l'automatismo
                });
            }

            // Inizia lo slideshow automatico
            startSlideShow();

            //Modal Prenotazione
            function prenotazione() {
                prenotaDialog.style.display = 'flex'                
            }

            function setupPrenotaDialog() {
                const prenotaDialog = document.getElementById('prenota-dialog');
                const iframe = document.getElementById('host-websites-widget');
                const prenotaContent = prenotaDialog.querySelector('.container');
                const prenotaLink = document.getElementById('linkPrenotazione');
                
                // Funzione per dimensionare l'iframe correttamente
                function resizeIframe() {
                    // Calcola l'altezza disponibile (80% dell'altezza della finestra)
                    const availableHeight = window.innerHeight * 0.8;
                    prenotaContent.style.height = `${availableHeight}px`;
                    
                    // Se su mobile, usa l'intera larghezza
                    if (window.innerWidth < 768) {
                        prenotaContent.style.width = '98%';
                    } else {
                        prenotaContent.style.width = '95%';
                        prenotaContent.style.maxWidth = '1400px';
                    }

                    iframe.style.margin = 'auto 0';
                }
                
                // Ridimensiona quando la finestra cambia dimensione
                window.addEventListener('resize', resizeIframe);
                
                // Apri il dialog quando si clicca su "Prenota Ora"
                prenotaLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    prenotaDialog.style.display = 'flex';
                    resizeIframe(); // Assicurati che le dimensioni siano corrette
                });
                
                // Chiudi il dialog quando si clicca fuori dal contenuto
                prenotaDialog.addEventListener('click', function(e) {
                    if (!prenotaContent.contains(e.target)) {
                        prenotaDialog.style.display = 'none';
                    }
                });
                
                // Aggiungi un pulsante di chiusura (X) per migliorare l'usabilità
                const closeButton = document.createElement('button');
                closeButton.innerHTML = '&times;';
                closeButton.className = 'close-button';
                closeButton.style.cssText = `
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    background: #fff;
                    border: none;
                    border-radius: 50%;
                    width: 30px;
                    height: 30px;
                    font-size: 20px;
                    cursor: pointer;
                    z-index: 2100;
                `;
                closeButton.addEventListener('click', function() {
                    prenotaDialog.style.display = 'none';
                });
                prenotaContent.style.position = 'relative';
                prenotaContent.appendChild(closeButton);
            }

            setupPrenotaDialog();

            // Chiudi il dialogo quando si clicca fuori dal contenuto
            prenotaDialog.addEventListener('click', function(e) {
                if (!prenotaContent.contains(e.target)) {
                    prenotaDialog.style.display = 'none';
                }
            });

            // Initialize language
            function initializeLanguage() {
                const savedLanguage = localStorage.getItem('language') || 'it';
                updateLanguage(savedLanguage);
            }
   
            // Update language display
            function updateLanguage(lang) {
                // Set document language
                document.documentElement.lang = lang;
        
                // Update all language-specific elements
                document.querySelectorAll('.lang').forEach(el => {
                    const translation = el.getAttribute(`data-${lang}`);
                    if (translation) {
                        el.innerHTML = translation;
                    }
                });
        
                // Update language selector display
                const selectedOption = document.querySelector(`.language-option[data-lang="${lang}"]`);
                if (selectedOption) {
                    const flagSrc = selectedOption.querySelector('img').src;
                    const flagAlt = selectedOption.querySelector('img').alt;
                    const languageName = selectedOption.textContent.trim();
                    
                    currentLanguage.innerHTML = `
                        <img src="${flagSrc}" alt="${flagAlt}" class="w-5 h-4 mr-2" />
                        ${languageName}
                    `;
                    // chiude il selettore
                    //document.getElementById("language-dropdown").style.display = "none";
                }
            }
        
            // Language Dropdown Event Listeners
            currentLanguage.addEventListener('click', function(e) {
                e.stopPropagation();
                languageDropdown.classList.toggle('hidden');
            });
        
            document.addEventListener('click', function() {
                languageDropdown.classList.add('hidden');
            });
        
            languageOptions.forEach(option => {
                option.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const selectedLang = this.getAttribute('data-lang');
                    
                    // Save and update language
                    localStorage.setItem('language', selectedLang);
                    updateLanguage(selectedLang);
                });
            });

            // Cookie Management
            function initializeCookies() {
                const cookiesAccepted = localStorage.getItem('cookiesAccepted');
                
                if (!cookiesAccepted) {
                    cookieBanner.style.display = 'flex';
                } else {
                    cookieBanner.style.display = 'none';
                }
            }
        
            // Accept All Cookies
            acceptCookiesBtn.addEventListener('click', function() {
                localStorage.setItem('cookiesAccepted', 'true');
                cookieBanner.style.display = 'none';
            });
        
            // Manage Cookies
            manageCookiesBtn.addEventListener('click', function() {
                privacyOverlay.style.display = 'flex';
            });
        
            // Close Privacy Overlay
            closePrivacyBtn.addEventListener('click', function() {
                privacyOverlay.style.display = 'none';
            });
        
            // Privacy Form Submission
            privacyForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const privacyConsent = document.getElementById('privacy-consent');
                const currentLang = localStorage.getItem('language') || 'it';
                
                if (privacyConsent.checked) {
                    localStorage.setItem('cookiesAccepted', 'true');
                    privacyOverlay.style.display = 'none';
                    cookieBanner.style.display = 'none';
                } else {
                    alert(currentLang === 'it' 
                        ? 'Devi accettare l\'informativa privacy per procedere' 
                        : 'You must accept the privacy policy to proceed');
                }
            });
        
            // Contact Form Submission
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const privacyCheckbox = contactForm.querySelector('input[name="privacy"]');
                const currentLang = localStorage.getItem('language') || 'it';
                
                // Aggiorna il campo hidden con la lingua corrente
                document.getElementById('current-lang-input').value = currentLang;
                
                if (privacyCheckbox.checked) {
                    // Invia il form tramite AJAX
                    const formData = new FormData(contactForm);
                    
                    fetch('mail.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        // Mostra messaggio di successo
                        alert(currentLang === 'it' 
                            ? response.text()
                            : response.text());
                        contactForm.reset();
                    })
                    .catch(error => {
                        console.error('Errore:', error);
                        alert(currentLang === 'it' 
                            ? 'Si è verificato un errore durante l\'invio del messaggio.' 
                            : 'An error occurred while sending the message.');
                    });
                } else {
                    alert(currentLang === 'it' 
                        ? 'Devi accettare il trattamento dei dati personali per inviare il messaggio' 
                        : 'You must accept the processing of personal data to send the message');
                }
            });
        
            // Initialize everything
            initializeLanguage();
            initializeCookies();
        });
    </script>
</body>
</html>
