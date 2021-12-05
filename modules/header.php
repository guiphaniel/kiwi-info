<?php include_once __DIR__.'/../include/config.php' ?>
<header>
    <a href="/index.php" id="logo-group">
        <p>Kiwi Info</p>
        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="kiwi-bird" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" id="logo"><g class="fa-group"><path fill="currentColor" d="M144 410v54a16 16 0 0 1-16 16h-16a16 16 0 0 1-16-16v-73.69A190.9 190.9 0 0 0 144 410zm432-186a112 112 0 0 1-102.62 111.61l72.54 136.05A16 16 0 0 0 560 480a16.2 16.2 0 0 0 3.95-.5A16 16 0 0 0 576 464V224zM208 415.32V464a16 16 0 0 0 16 16h16a16 16 0 0 0 16-16v-58.95a191 191 0 0 1-48 10.27z" class="fa-secondary"></path><path fill="currentColor" d="M464 112h-15.74a260.23 260.23 0 0 1-147.74-46.24q-6.09-4.22-12.52-7.94v-.13A191.08 191.08 0 0 0 192 32C86 32 0 118 0 224s86 192 192 192a191.08 191.08 0 0 0 96-25.69v-.2c2.83-1.61 5.61-3.28 8.33-5.05C342 355.33 393.58 336.1 448 336h16a112 112 0 0 0 0-224zm0 136a24 24 0 1 1 24-24 24 24 0 0 1-24 24z" class="fa-primary"></path></g></svg>        
    </a>
    <nav id="navbar">          
        <input type="checkbox" name="checkNav" id="checkNav">   
        <span id="checkNavSpan"></span>
        <ul>
            <li class="<?= addActive('/index.php') ?>">
                <a href="/index.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M336 463.59V368a16 16 0 0 0-16-16h-64a16 16 0 0 0-16 16v95.71a16 16 0 0 1-15.92 16L112 480a16 16 0 0 1-16-16V300.06l184.39-151.85a12.19 12.19 0 0 1 15.3 0L480 300v164a16 16 0 0 1-16 16l-112-.31a16 16 0 0 1-16-16.1z" class="fa-secondary"></path><path fill="currentColor" d="M573.32 268.35l-25.5 31a12 12 0 0 1-16.9 1.65L295.69 107.21a12.19 12.19 0 0 0-15.3 0L45.17 301a12 12 0 0 1-16.89-1.65l-25.5-31a12 12 0 0 1 1.61-16.89L257.49 43a48 48 0 0 1 61 0L408 116.61V44a12 12 0 0 1 12-12h56a12 12 0 0 1 12 12v138.51l83.6 68.91a12 12 0 0 1 1.72 16.93z" class="fa-primary"></path></g></svg>
                    <span>Accueil</span>
                </a>                    
            </li>
            <li class="<?= addActive('/presentation.php') ?>">
                <a href="/presentation.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M528 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h480a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zm-352 96a64 64 0 1 1-64 64 64.06 64.06 0 0 1 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5a103 103 0 0 0 79.6 0h5c37.1 0 67.2 25.8 67.2 57.6zM512 312a8 8 0 0 1-8 8H360a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-64a8 8 0 0 1-8 8H360a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-64a8 8 0 0 1-8 8H360a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8z" class="fa-secondary"></path><path fill="currentColor" d="M176 256a64 64 0 1 0-64-64 64.06 64.06 0 0 0 64 64zm44.8 32h-5a103 103 0 0 1-79.6 0h-5C94.1 288 64 313.8 64 345.6v19.2c0 10.6 10 19.2 22.4 19.2h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6z" class="fa-primary"></path></g></svg>
                    <span>Présentation</span>
                </a>                    
            </li>
            <li class="<?= addActive('/contact.php') ?>">
                <a href="/contact.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M245.53 410.5l-75 92.83c-14 17.1-42.5 7.8-42.5-15.8V358l280.26-252.77c5.5-4.9 13.3 2.6 8.6 8.3L191.72 387.87z" class="fa-secondary"></path><path fill="currentColor" d="M511.59 28l-72 432a24.07 24.07 0 0 1-33 18.2l-214.87-90.33 225.17-274.34c4.7-5.7-3.1-13.2-8.6-8.3L128 358 14.69 313.83a24 24 0 0 1-2.2-43.2L476 3.23c17.29-10 39 4.6 35.59 24.77z" class="fa-primary"></path></g></svg>
                    <span>Contact</span>
                </a>                    
            </li>
            <li id="nav-blog" class="<?= addActive('/blog.php') ?>">
                <div id="blog">
                    <a href="/blog.php">
                        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M208 352c-41 0-79.1-9.3-111.3-25-21.8 12.7-52.1 25-88.7 25a7.83 7.83 0 0 1-7.3-4.8 8 8 0 0 1 1.5-8.7c.3-.3 22.4-24.3 35.8-54.5-23.9-26.1-38-57.7-38-92C0 103.6 93.1 32 208 32s208 71.6 208 160-93.1 160-208 160z" class="fa-secondary"></path><path fill="currentColor" d="M576 320c0 34.3-14.1 66-38 92 13.4 30.3 35.5 54.2 35.8 54.5a8 8 0 0 1 1.5 8.7 7.88 7.88 0 0 1-7.3 4.8c-36.6 0-66.9-12.3-88.7-25-32.2 15.8-70.3 25-111.3 25-86.2 0-160.2-40.4-191.7-97.9A299.82 299.82 0 0 0 208 384c132.3 0 240-86.1 240-192a148.61 148.61 0 0 0-1.3-20.1C522.5 195.8 576 253.1 576 320z" class="fa-primary"></path></g></svg>
                        <span>Blog</span>
                    </a>                        
                </div>
                <div id="articles">
                    <ul>
                        <?php
                            include_once __DIR__.'/../include/start-db.php';
                            $sql = 'select * from articles order by id desc limit 5';
                            
                            foreach ($pdo->query($sql) as $row): ?>                            
                            <li class="<?php if(($_GET['article']??-1) == $row['id']) echo 'active' ?>">
                                <a href="/blog.php?article=<?=$row['id']?>">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="newspaper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M544 64H96a32 32 0 0 0-32 32v322.21c0 .36-.05.73-.09 1.09 0 .21 0 .42-.08.63s-.08.66-.13 1-.08.46-.12.68-.1.61-.16.91-.11.46-.16.69-.13.59-.21.87-.13.46-.19.69l-.24.84-.24.68c-.09.28-.18.55-.28.82s-.17.45-.26.67-.21.53-.32.79-.2.45-.3.67-.23.51-.35.76l-.33.65c-.13.25-.25.49-.39.74l-.36.63-.42.72-.39.61c-.15.23-.3.46-.46.69l-.42.6-.48.66c-.15.2-.3.39-.46.58s-.33.43-.51.64l-.48.55-.54.61-.51.53c-.18.2-.37.39-.57.59l-.53.5-.6.56-.55.48-.62.52-.58.46-.65.49-.6.43-.68.46c-.2.14-.41.27-.62.4l-.69.43-.65.37c-.23.13-.47.27-.71.39l-.67.34c-.24.13-.48.25-.73.36l-.69.31-.74.32-.71.28-.77.29-.72.24-.78.25-.75.21-.79.21-.76.17-.81.17-.77.14-.82.12-.79.1-.83.09-.81.06h-1.65H528a48 48 0 0 0 48-48V96a32 32 0 0 0-32-32zM304 372a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm208 96a12 12 0 0 1-12 12H348a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H348a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h360a12 12 0 0 1 12 12z" class="fa-secondary"></path><path fill="currentColor" d="M292 352H140a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm0-96H140a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm208 96H348a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm0-96H348a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zM0 128v287.33c0 17.44 13.67 32.18 31.1 32.67A32 32 0 0 0 64 416V96H32a32 32 0 0 0-32 32z" class="fa-primary"></path></g></svg>
                                    <span class="article-title"><?=$row['titre1']?></span>
                                </a>                                
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </li>
            <?php if (isset($_SESSION['user'])) : ?>            
                <li class="<?= addActive('/creation-article.php') ?>">
                    <a href="/creation-article.php">
                        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="file-signature" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M64 400a16 16 0 0 0 16 16h12.39a43.17 43.17 0 0 0 41-29.53L144 354.59l16.83 50.47c4.45 13.46 23.11 14.87 29.48 2.09l7.69-15.34a10.91 10.91 0 0 1 10-6.19 11.08 11.08 0 0 1 10.17 6.52A43 43 0 0 0 256 416h101l27-27.19v99.31A23.94 23.94 0 0 1 360 512H23.88A23.94 23.94 0 0 1 0 488V23.88A23.94 23.94 0 0 1 24 0h232v112a16 16 0 0 0 16 16h112v123.67L288 347v37h-32a11.63 11.63 0 0 1-9.35-6.5c-11.94-23.86-46.25-30.35-66-14.16l-13.88-41.64a24 24 0 0 0-45.55 0L103 376.34A11.21 11.21 0 0 1 92.39 384H80a16 16 0 0 0-16 16z" class="fa-secondary"></path><path fill="currentColor" d="M384 121.9a23.9 23.9 0 0 0-7-16.9L279.1 7a24 24 0 0 0-17-7H256v112a16 16 0 0 0 16 16h112zM288 347v69h69l161.67-162.78-67.88-67.88zm280.56-179.65l-31.87-31.87a25.48 25.48 0 0 0-36 0l-27.25 27.25 67.88 67.88 27.25-27.25a25.45 25.45 0 0 0-.01-36.01z" class="fa-primary"></path></g></svg>
                        <span>Creation Article</span>
                    </a>                    
                </li>
            <?php else: ?>
                <li class="<?= addActive('/inscription.php') ?>">
                    <a href="/inscription.php">
                        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="file-signature" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M64 400a16 16 0 0 0 16 16h12.39a43.17 43.17 0 0 0 41-29.53L144 354.59l16.83 50.47c4.45 13.46 23.11 14.87 29.48 2.09l7.69-15.34a10.91 10.91 0 0 1 10-6.19 11.08 11.08 0 0 1 10.17 6.52A43 43 0 0 0 256 416h101l27-27.19v99.31A23.94 23.94 0 0 1 360 512H23.88A23.94 23.94 0 0 1 0 488V23.88A23.94 23.94 0 0 1 24 0h232v112a16 16 0 0 0 16 16h112v123.67L288 347v37h-32a11.63 11.63 0 0 1-9.35-6.5c-11.94-23.86-46.25-30.35-66-14.16l-13.88-41.64a24 24 0 0 0-45.55 0L103 376.34A11.21 11.21 0 0 1 92.39 384H80a16 16 0 0 0-16 16z" class="fa-secondary"></path><path fill="currentColor" d="M384 121.9a23.9 23.9 0 0 0-7-16.9L279.1 7a24 24 0 0 0-17-7H256v112a16 16 0 0 0 16 16h112zM288 347v69h69l161.67-162.78-67.88-67.88zm280.56-179.65l-31.87-31.87a25.48 25.48 0 0 0-36 0l-27.25 27.25 67.88 67.88 27.25-27.25a25.45 25.45 0 0 0-.01-36.01z" class="fa-primary"></path></g></svg>
                        <span>Inscription</span>
                    </a>                    
                </li>
            <?php endif; ?> 
            <li class="<?= addActive('/les_chiffres.php') ?>">
                <a href="/les_chiffres.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="sort-numeric-up-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M400 416h-16V304a16 16 0 0 0-16-16h-48a16 16 0 0 0-14.29 8.83l-16 32A16 16 0 0 0 304 352h16v64h-16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zM330.17 34.91a79 79 0 0 0-55 54.17c-14.27 51.05 21.19 97.77 68.83 102.53a84.07 84.07 0 0 1-20.85 12.91c-7.57 3.4-10.8 12.47-8.18 20.34l9.9 20c2.87 8.63 12.53 13.49 20.9 9.91 58-24.77 86.25-61.61 86.25-132V112c-.02-51.21-48.4-91.34-101.85-77.09zM352 132a20 20 0 1 1 20-20 20 20 0 0 1-20 20z" class="fa-secondary"></path><path fill="currentColor" d="M107.31 36.69a16 16 0 0 0-22.62 0l-80 96C-5.35 142.74 1.78 160 16 160h48v304a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V160h48c14.21 0 21.38-17.24 11.31-27.31z" class="fa-primary"></path></g></svg>
                    <span>Les chiffres</span>
                </a>                    
            </li>
            <?php 
                if (isset($_SESSION['user'])) :
                    ?>            
            <li class="<?= addActive('/logout.php') ?>">
                <a href="/logout.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="sign-out-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M64 160v192a32 32 0 0 0 32 32h84a12 12 0 0 1 12 12v40a12 12 0 0 1-12 12H96a96 96 0 0 1-96-96V160a96 96 0 0 1 96-96h84a12 12 0 0 1 12 12v40a12 12 0 0 1-12 12H96a32 32 0 0 0-32 32z" class="fa-secondary"></path><path fill="currentColor" d="M288 424v-96H152a23.94 23.94 0 0 1-24-24v-96a23.94 23.94 0 0 1 24-24h136V88c0-21.4 25.9-32 41-17l168 168a24.2 24.2 0 0 1 0 34L329 441c-15 15-41 4.52-41-17z" class="fa-primary"></path></g></svg>           
                    <span>Déconnexion <?= $_SESSION['user']['name']??'no_name'?></span>
                </a>                    
            </li>
            <?php
                else:
                    ?>
            <li class="<?= addActive('/login.php') ?>">
                <a href="/login.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M512 160v192a96 96 0 0 1-96 96h-84a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h84a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32h-84a12 12 0 0 1-12-12V76a12 12 0 0 1 12-12h84a96 96 0 0 1 96 96z" class="fa-secondary"></path><path fill="currentColor" d="M369 273L201 441c-15 15-41 4.5-41-17v-96H24a23.94 23.94 0 0 1-24-24v-96a23.94 23.94 0 0 1 24-24h136V88c0-21.5 26-32 41-17l168 168a24.2 24.2 0 0 1 0 34z" class="fa-primary"></path></g></svg>
                    <span>Connexion</span>
                </a>                    
            </li>
            <?php
                endif;
                ?>
        </ul>
    </nav>        
</header>