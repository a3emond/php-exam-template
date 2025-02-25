

<!-- Localized Content -->
<h1 data-lang-en="Welcome to My PHP Exam Template" data-lang-fr="Bienvenue dans mon modèle d'examen PHP">
    Welcome to My PHP Exam Template
</h1>

<p data-lang-en="This project serves as a structured template for organizing and presenting answers to the PHP Server-Side Web Development exam for the Winter 2025 session at LaSalle College, Montreal."
   data-lang-fr="Ce projet sert de modèle structuré pour organiser et présenter les réponses à l'examen de développement web côté serveur PHP pour la session Hiver 2025 au Collège LaSalle, Montréal.">
    This project serves as a structured template for organizing and presenting answers to the PHP Server-Side Web Development exam for the Winter 2025 session at LaSalle College, Montreal.
</p>

<h2 data-lang-en="📋 Project Overview" data-lang-fr="📋 Aperçu du projet">📋 Project Overview</h2>

<p data-lang-en="The application is designed as a Single Page Application (SPA) using PHP for server-side routing, combined with JavaScript for dynamic content loading. It allows seamless navigation between exercises without full page reloads, ensuring a smooth user experience."
   data-lang-fr="L'application est conçue comme une Application Monopage (SPA) utilisant PHP pour le routage côté serveur, combiné à JavaScript pour le chargement dynamique du contenu. Cela permet une navigation fluide entre les exercices sans rechargement complet des pages, assurant une expérience utilisateur optimale.">
    The application is designed as a Single Page Application (SPA) using PHP for server-side routing, combined with JavaScript for dynamic content loading. It allows seamless navigation between exercises without full page reloads, ensuring a smooth user experience.
</p>

<h2 data-lang-en="⚙️ How It Works" data-lang-fr="⚙️ Comment ça fonctionne">⚙️ How It Works</h2>

<ul>
    <li data-lang-en="<strong>Dynamic Routing:</strong> The <code>index.php</code> acts as the main router, handling requests and loading the appropriate content into the main content area."
        data-lang-fr="<strong>Routage dynamique :</strong> Le fichier <code>index.php</code> agit comme routeur principal, gérant les requêtes et chargeant le contenu approprié dans la zone de contenu principale.">
        <strong>Dynamic Routing:</strong> The <code>index.php</code> acts as the main router, handling requests and loading the appropriate content into the main content area.
    </li>
    <li data-lang-en="<strong>SPA Behavior(Disabled):</strong> JavaScript handles client-side navigation, dynamically fetching pages and injecting them into the <code>#main-content</code> div."
        data-lang-fr="<strong>Comportement SPA (Disabled):</strong> JavaScript gère la navigation côté client, récupérant dynamiquement les pages et les injectant dans la div <code>#main-content</code>.">
        <strong>SPA Behavior (Disabled):</strong> JavaScript handles client-side navigation, dynamically fetching pages and injecting them into the <code>#main-content</code> div.
    </li>
    <li data-lang-en="<strong>PHP Exercises:</strong> Each exam exercise is stored as a separate PHP file under the <code>pages/</code> directory (<code>ex1.php</code>, <code>ex2.php</code>, etc.)."
        data-lang-fr="<strong>Exercices PHP :</strong> Chaque exercice d'examen est stocké dans un fichier PHP séparé sous le répertoire <code>pages/</code> (<code>ex1.php</code>, <code>ex2.php</code>, etc.).">
        <strong>PHP Exercises:</strong> Each exam exercise is stored as a separate PHP file under the <code>pages/</code> directory (<code>ex1.php</code>, <code>ex2.php</code>, etc.).
    </li>
    <li data-lang-en="<strong>Responsive Design:</strong> The layout is fully responsive, adapting to different screen sizes. The navigation bar stacks links vertically on smaller devices."
        data-lang-fr="<strong>Conception réactive :</strong> La mise en page est entièrement réactive et s'adapte aux différentes tailles d'écran. La barre de navigation empile les liens verticalement sur les petits appareils.">
        <strong>Responsive Design:</strong> The layout is fully responsive, adapting to different screen sizes. The navigation bar stacks links vertically on smaller devices.
    </li>
</ul>

<h2 data-lang-en="📁 Directory Structure" data-lang-fr="📁 Structure du répertoire">📁 Directory Structure</h2>

<pre>
project-root/
│
├── apache/             # Apache & PHP configs
├── www/
│   ├── components/     # Reusable components (navbar, header, footer)
│   ├── pages/          # Exam answers (ex1.php, ex2.php, etc.)
│   ├── static/         # Static assets (CSS, JS)
│   ├── index.php       # Main router
│   └── .htaccess       # Apache routing rules
│
├── docker-compose.yml  # Docker setup
└── README.md
</pre>

<h2 data-lang-en="💡 Instructions" data-lang-fr="💡 Instructions">💡 Instructions</h2>

<ol>
    <li data-lang-en="Use the navigation bar to switch between exercises." 
        data-lang-fr="Utilisez la barre de navigation pour passer d'un exercice à l'autre.">
        Use the navigation bar to switch between exercises.
    </li>
    <li data-lang-en="Each exercise follows the exam requirements and is contained within its dedicated PHP file." 
        data-lang-fr="Chaque exercice suit les exigences de l'examen et est contenu dans son propre fichier PHP.">
        Each exercise follows the exam requirements and is contained within its dedicated PHP file.
    </li>
    <li data-lang-en="New exercises can easily be added by creating a new PHP file in the <code>pages/</code> directory and linking it in the navbar." 
        data-lang-fr="De nouveaux exercices peuvent facilement être ajoutés en créant un nouveau fichier PHP dans le répertoire <code>pages/</code> et en l'ajoutant à la barre de navigation.">
        New exercises can easily be added by creating a new PHP file in the <code>pages/</code> directory and linking it in the navbar.
    </li>
</ol>

<h2 data-lang-en="🎯 Purpose" data-lang-fr="🎯 Objectif">🎯 Purpose</h2>

<p data-lang-en="This template is built to simplify exam management, ensuring that each question is properly organized and easily accessible. It leverages PHP fundamentals along with modern web development practices to provide a clean and efficient workspace for the exam."
   data-lang-fr="Ce modèle est conçu pour simplifier la gestion des examens, garantissant que chaque question est correctement organisée et facilement accessible. Il exploite les bases du PHP ainsi que les pratiques modernes de développement web.">
    This template is built to simplify exam management, ensuring that each question is properly organized and easily accessible. It leverages PHP fundamentals along with modern web development practices to provide a clean and efficient workspace for the exam.
</p>

<h2 data-lang-en="👨‍💻 Developer" data-lang-fr="👨‍💻 Développeur">👨‍💻 Developer</h2>

<p>
    <strong data-lang-en="Alexandre Emond" data-lang-fr="Alexandre Emond">Alexandre Emond</strong><br>
    <span data-lang-en="PHP Server Web Development - Winter 2025" data-lang-fr="Développement Web côté Serveur PHP - Hiver 2025">PHP Server Web Development - Winter 2025</span><br>
    <span data-lang-en="LaSalle College, Montreal" data-lang-fr="Collège LaSalle, Montréal">LaSalle College, Montreal</span>
</p>
