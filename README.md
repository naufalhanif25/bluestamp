<!-- Judul -->
<div align="center">
    <h1>Bluestamp</h1>
</div>

<!-- Badge -->
<div align="center">
    <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />
    <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
    <img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" /> 
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" /> 
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
    <img src="https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white" />
</div>

<!-- Deskripsi -->
<h2>
    📝 Apa itu Bluestamp?
</h2>
<p align="justify">
Bluestamp adalah sebuah platform untuk membagikan cerita singkat, curhatan, atau kutipan singkat. Platform ini gratis dan bebas, siapa saja dapat membagikan cerita dan siapa saja dapat memberikan dukungan serta tanggapan terhadap cerita tersebut.

Figma: <a href="https://www.figma.com/design/Ee3HQEYQuH4UFZeZCLeqFJ/Bluestamp?node-id=36-343&t=DYHvm3YMzTOsOOcG-1" target="_blank">Bluestamp</a>
</p>

<!-- Fitur -->
<h2>
    ✨ Fitur-fitur Bluestamp
</h2>
<ul>
    <li>Berbagi cerita (share)</li>
    <li>Mencari cerita (search)</li>
    <li>Menyukai cerita (like)</li>
    <li>Memberikan tanggapan (comment)</li>
    <li>Membagikan cerita ke media sosial</li>
</ul>

<!-- Cara mengembangkan Bluestamp -->
<h2>
    🧑🏻‍💻 Cara mengembangkan Bluestamp
</h2>
<ol>
    <li>
        Clone repository
        <pre><code>git clone https://github.com/naufalhanif25/bluestamp.git</code></pre>
    </li>
    <li>
        Install file-file vendor di directory project
        <pre><code>composer install</code></pre>
    </li>
    <li>Jalankan web server Apache dan MySQL di XAMPP</li>
    <li>
        Buat database dengan nama <code>bluestamp</code>
        <ul>
            <li>Buka shell</li>
            <li>Masuk ke database
                <pre><code>mysql -u [user]</code></pre>
            </li>
            <li>Buat database 
                <pre><code>create database bluestamp;</code></pre>
            </li>
            <li>Keluar dari database</li>
        </ul>
    </li>
    <li>
        Migrasi database. Jalankan perintah berikut di directory project
        <pre><code>php asrtisan migrate</code></pre>
    </li>
    <li>
        Jalankan server lokal
        <pre><code>php artisan serve</code></pre>
    </li>
</ol>