<?php include_once __DIR__.'/../include/config.php' ?>
<footer>
        <div>            
            <a href="contact.php"><h2>Contact</h2></a>
            <address>                   
                <a href="mailto:<?php echo MAIL_ADDRESS ?>"><?php echo MAIL_ADDRESS ?></a>
                <a href="tel:+33<?php echo TEL_NUM ?>">0<?php echo TEL_NUM ?></a>
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1380.7490294918682!2d5.215268708047464!3d46.200546284107745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f353d4089ec7cd%3A0x66db7c69403257f4!2s3%20Av.%20Pierre%20Semard%2C%2001000%20Bourg-en-Bresse!5e0!3m2!1sfr!2sfr!4v1635409448089!5m2!1sfr!2sfr"><?php echo POST_ADDRESS ?></a>
            </address>
            <p>&copy; Guilhem RICHAUD</p>
        </div>
        <div>
            <section>            
                <table>
                    <caption><h2>Horaires</h2></caption>
                    <tr>
                        <th>Lundi</th>
                        <td>Fermé</td>
                    </tr>
                    <tr>
                        <th>Mardi</th>
                        <td>14:00–18:00</td>
                    </tr>
                    <tr>
                        <th>Mercredi</th>
                        <td>10:00–12:30, 14:00–18:00</td>
                    </tr>
                    <tr>
                        <th>Jeudi</th>
                        <td>Fermé</td>
                    </tr>
                    <tr>
                        <th>Vendredi</th>
                        <td>14:00–18:00</td>
                    </tr>
                    <tr>
                        <th>Samedi</th>
                        <td>10:00–12:30, 14:00–18:00</td>
                    </tr>
                    <tr>
                        <th>Dimanche</th>
                        <td>Fermé</td>
                    </tr>
                </table>
            </section>
        </div>
        <div>
            <h2>Les derniers articles</h2>    
            <nav>
                <ul>
                    <?php
                        include_once __DIR__.'/../include/start-db.php';
                        $sql = 'select * from articles order by id desc limit 5';
                        
                        foreach ($pdo->query($sql) as $row): ?>                            
                        <li>
                            <a class="last-article <?php if(($_GET['article']??-1) == $row['id']) echo 'active' ?>" href="/blog.php?article=<?=$row['id']?>">
                                <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="newspaper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon"><g class="fa-group"><path fill="currentColor" d="M544 64H96a32 32 0 0 0-32 32v322.21c0 .36-.05.73-.09 1.09 0 .21 0 .42-.08.63s-.08.66-.13 1-.08.46-.12.68-.1.61-.16.91-.11.46-.16.69-.13.59-.21.87-.13.46-.19.69l-.24.84-.24.68c-.09.28-.18.55-.28.82s-.17.45-.26.67-.21.53-.32.79-.2.45-.3.67-.23.51-.35.76l-.33.65c-.13.25-.25.49-.39.74l-.36.63-.42.72-.39.61c-.15.23-.3.46-.46.69l-.42.6-.48.66c-.15.2-.3.39-.46.58s-.33.43-.51.64l-.48.55-.54.61-.51.53c-.18.2-.37.39-.57.59l-.53.5-.6.56-.55.48-.62.52-.58.46-.65.49-.6.43-.68.46c-.2.14-.41.27-.62.4l-.69.43-.65.37c-.23.13-.47.27-.71.39l-.67.34c-.24.13-.48.25-.73.36l-.69.31-.74.32-.71.28-.77.29-.72.24-.78.25-.75.21-.79.21-.76.17-.81.17-.77.14-.82.12-.79.1-.83.09-.81.06h-1.65H528a48 48 0 0 0 48-48V96a32 32 0 0 0-32-32zM304 372a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm208 96a12 12 0 0 1-12 12H348a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H348a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h152a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H140a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h360a12 12 0 0 1 12 12z" class="fa-secondary"></path><path fill="currentColor" d="M292 352H140a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm0-96H140a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm208 96H348a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zm0-96H348a12 12 0 0 0-12 12v8a12 12 0 0 0 12 12h152a12 12 0 0 0 12-12v-8a12 12 0 0 0-12-12zM0 128v287.33c0 17.44 13.67 32.18 31.1 32.67A32 32 0 0 0 64 416V96H32a32 32 0 0 0-32 32z" class="fa-primary"></path></g></svg>
                                <span class="article-title"><?=$row['titre1']?></span>
                            </a>                                
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>  
        </div>
    </footer>