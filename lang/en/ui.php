<?php

//zona navbar
return
  [
    'categories' => 'Categories',
    'article' => 'Items',
    'register' => 'register',
    'login' => 'login',
    'logout' => 'logout',
    'create' => 'create new ad',
    'search' => 'Search',
    'revisor' => 'INSPECTION AREA',
    //zona welcome
    'headerp' => 'COMPULSIVE PURCHASES WITHOUT ANY SENSE',

    //zona chi siamo
    'chisiamo' => 'Who we are:',
    'info' => 'On a hot summer day, in a small windowless office, five programmers found themselves with a lot of free time and little inspiration. Luca, Marzio, Andrei, Michele and Emanuele were used to solving complex coding problems, but that week there was a shortage of projects. So, between one coffee break and another, they decided it was time to do something different, something innovative and fun.',
    //zona i nostri servizi
    'servizi' => 'Our services:',
    'servizio1' => 'Personalized Purchases via AI',
    'servizio2' => 'Subscription Programs and Ongoing Services',
    'servizio3' => '24/7 Customer Support via Chatbot and Live Chat',
    'servizio1description' => 'Personalized Recommendations: Suggested products based on previous purchases and user interests, offering you targeted promotions and curated shopping experiences',
    'servizio2description' => 'Regular Product Deliveries: Subscriptions for everyday products, such as coffee, household items, or beauty products, with automatic deliveries at set intervals. Access to Exclusive Content: Premium content, such as tutorials, guides, and webinars, reserved for subscribers to enhance the product experience. Discounts and Exclusive Offers: Special promotions, discounts and early access to new product launches reserved for membership program members.',
    'servizio3description' => 'Advanced Chatbots: Using AI-powered chatbots to quickly answer frequently asked questions, assist with site navigation, and resolve common issues any time of day or night. Live Chat with Human Operators: Access real-time customer service representatives to resolve more complex issues and provide personalized advice.',
    //form di creazione articolo subito dopo registrato
    'creaarticolo' => 'PUT UP FOR SALE',
    'title' => 'TITLE',
    'price' => 'PRICE',
    'description' => 'DESCRIPTION',
    'creaarticolobtn' => 'CREATE SECTION',
    'category' => 'Select a category',
    'choosefile'  => 'Choose file',
    'photopreview' => 'Photo preview',
    //pulsante diventa revisore
    'revisor1' => 'Do you want to become a Reviewer?',
    'revisorp' => 'By clicking the button below you will make a request to our admin',
    'revisorbtn' => 'Become a Reviewer',
    //nessuna presenza di articoli
    'noarticle' => 'No items present',
    //revisor dashboard
    'revisordashboard' => 'Reviewer Dashboard',
    'reject' => 'Reject',
    'accept' => 'Accept',
    'recover' => 'Recovers previous item',
    'norevarticle' => 'No items present',
    'homepage' => 'Back to home Page',
    'revisorzone' => 'Area reserved for auditors',
    //email che viene mandata ad admin
    'subject' => "Make the named user a reviewer:",
    'text' => 'A user asked to work with us',
    'userinfo' => 'Here are his details:',
    'name' => 'Name:',
    'email' => 'Email:',
    'ifreviewer' => 'If you want to accept your request click here:',
    'clicklink' => 'Make Reviewer',
    //login e registrati
    'login' => 'Login',
    'email' => 'Email:',
    'hi' => 'Hi!',
    'insert' => "Enter your personal data and start the adventure with us",
    'register' => 'Register',
    'welcome' => 'Welcome!',
    'continue' => 'To continue to be connected to us please log in with your personal details',
    'createaccount' => 'Create an account',
    'name' => 'Name',
    'surname' => 'Surname',
    'age' => 'Age',
    'pass' => 'Password',
    'confirmpass' => 'Confirm Password',
    'emailno' => 'Email',
    //
    'namerequired' => 'The name is required.',
    'surnamerequired' => 'The surname is required.',
    'agerequired' => 'Age is required.',
    'ageinteger' => 'Age must be an integer.',
    'emailrequired' => 'Email is required.',
    'emailemail' => 'Email must be a valid email address.',
    'emailunique' => 'Email has already been taken.',
    'passwordrequired' => 'Password is required.',
    'passwordmin' => 'Password must be at least 8 characters long.',
    'passwordconfirmed' => 'Password confirmation does not match.',




    // categorie e macro
    'articlemacrocategory' => 'Articles in the Macro category',
    'articlecategory' => 'Items in the category',
    'noarticlecategory' => 'No articles have been created for this category yet!',
    'creaarticolobtn' => 'CREATE SECTION',
    // card.blade
    'noadd' => 'No articles have been created yet',
    'price:' => 'Price:',
    'detail' => 'Detail',
    'height:' => 'Height:',
    'color:' => 'Color:',
    'decoration:' => 'Decoration:',
    'material:' => 'Material:',
    'height2:' => '5 Ft',
    'color2:' => 'Green',
    'decoration2:' => 'Balls & Bells',
    'material2:' => 'Ecologic',
    'buy' => 'Buy',
    //in merito alla ricerca dalla navbar
    'nosearch' => 'No articles match your search',

    //article.php model
    'titlerequired' => 'The title is required',
    'shorttitle' => 'The title is too short',
    'categoryrequired' => 'The category is required',
    'descriptionrequired' => 'The description is required',
    'successarticle' => 'Article created successfully!',
    //revisor controller
    'previewmod' => "You have undone the last change you made",
    'congratulation' => 'Congratulations, you have requested to become a reviewer!',
    'rejectedarticle' => 'You have rejected the article:',
    'acceptedarticle' => 'You have accepted the article:',
    //revisor.index
    'author' => 'Author:',
    //pagina di form revisor no log
    'coverletter' => 'Cover Letter',
    'submit' => 'SEND INQUIRY',
    //errori su form revisor no log
    'namerequired' => 'The "First Name" field is required',
    'surnamerequired' => 'The "Last Name" field is required.',
    'agerequired' => 'The "Age" field is required.',
    'ageinteger' => "The age must be an integer.",
    'agemin' => "The age must be greater than 18.",
    'emailrequired' => 'The "Email" field is required.',
    'emailemail' => "The email is not correctly formatted.",
    'coverletterrequired' => 'The "Cover Letter" field is required.',
    //
    'lastname' => 'Last Name',
    'firstname' => 'First Name',
    'workwithus' => 'WORK WITH US',

    'Moda' => 'Fashion',
    'Sport e Tempo libero' => 'Sports & Leisure',
    'Auto e Moto' => 'Cars & Motorcycles',
    'Viaggi e Valigeria' => 'Travel & Luggage',
    'Ufficio e Cancelleria' => 'Office & Stationery',
    'Alimentari e Bevande' => 'Food & Beverages',
    'Casa e Giardino' => 'Home & Garden',
    'Giocattoli e Prima Infanzia' => 'Toys & Baby',
    'Elettronica' => 'Electronics',
    'Libri, Film e Musica' => 'Books, Movies & Music',
    'Gioielli e Orologi' => 'Jewelry & Watches',
    'Salute e Bellezza' => 'Health & Beauty',
    'home' => 'Home',
    //filtro
    // ordina per 
    'ordina' => 'Sort by:',
    'piurecente' => 'Most recent',
    'menorecente' => 'Least recent',
    'crescente' => 'Ascending',
    'decrescente' => 'Descending',
    //v risultati per ricerca
    'risultati' => 'Search Results',





  ];
