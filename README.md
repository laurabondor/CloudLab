# CloudLab - FIIPractic 2024
Big Five Personality Test Laravel project

## Descriere

Acest proiect folosește modelul Big Five pentru a evalua trăsăturile de personalitate ale utilizatorilor. Proiectul include un panou de administrare unde administratorii pot vedea și gestiona utilizatorii, precum și o interfață pentru utilizatori pentru a completa și a vedea rezultatele proprii.

## Caracteristici principale

- **Test Big Five**: Utilizatorii pot completa testul Big Five pentru a evalua cinci trăsături majore de personalitate: Extraversion, Agreeableness, Conscientiousness, Neuroticism și Openness.
  
- **Panou de administrare**: Un panou de administrare securizat unde administratorii pot vizualiza, adăuga și șterge utilizatori.
  
- **Autentificare**: Sistem de autentificare pentru utilizatori și administratori.
  
- **Vizualizare Rezultate**: După completarea testului, utilizatorii pot vizualiza rezultatele proprii sub formă de grafice, oferindu-le o perspectivă vizuală asupra trăsăturilor lor de personalitate.

## Tehnologii folosite

- **Laravel**: Framework-ul PHP folosit pentru dezvoltarea backend-ului.
  
- **Bootstrap**: Framework-ul CSS pentru stilizarea interfeței utilizator.
  
- **Chart.js**: Biblioteca JavaScript pentru generarea de grafice pentru afișarea rezultatelor.
  
- **MySQL**: Baza de date folosită pentru stocarea datelor utilizatorilor și rezultatelor testelor.

## Cum să rulezi proiectul

1. Instalează dependențele:
    ```bash
    composer install
    ```

2. Copiază `.env.example` în `.env` și inlocuieste pentru DB_CONNECTION=sqlite in DB_CONNECTION=mysql apoi decomenteaza urmatoarele randuri si fa baza de date.

3. Generează cheia de aplicatie:
    ```bash
    php artisan key:generate
    ```

4. Rulează migrările și semințele:
    ```bash
    php artisan migrate --seed
    ```

5. Porneste serverul de dezvoltare:
    ```bash
    php artisan serve
    ```

Acceseaza proiectul în browser la adresa primita in linia de comanda.

Daca primesti eroare cand navighezi pe o alta pagina, atunci ruleaza:

    ```bash
    npm run dev
    ```

## Cum să testezi proiectul

### Accesarea panoului de administrare(dashboard)

Folosește următoarele date pentru a te conecta ca admin:
    - Email: `admin@gmail.com`
    - Parolă: `admin123`

### Accesarea rezultatelor ca utilizator

Datorită unor probleme tehnice cu trimiterea formularului de pe pagina `maketest`, te rugăm să folosești utilizatorul de test pentru a vedea rezultatele preîncărcate.

Folosește următoarele date pentru a te conecta ca test user:
    - Email: `test@gmail.com`
    - Parolă: `test123`
