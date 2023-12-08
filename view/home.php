<section id="slide">
    <div class="aspect-ratio-169">
        <img src="images\sale.png ">
        <img src="images\sale2.png">
        <img src="images\sale3.png">
    </div>
    <div class="doc__container">
        <div class="doc active"></div>
        <div class="doc"></div>
        <div class="doc"></div>
    </div>

</section>



    <div class="card">
        <?php
        foreach ($sphome1 as $sp) {
            echo '<img src="./uploads/'.$sp['img'].'" alt="" class="images__card">
        <div class="card__content">
            <div class="card__top">
                <h3 class="card__title">'.$sp['tensp'].'</h3>
                <p class="card__desc">'.$sp['mota'].'</p>
            </div>
            <div class="card__bottom">
                <span class="card__price">'.$sp['gia'].'</span>
                <button class="card__cart">
                    Add Cart

                </button>
            </div>
        </div>';
        }
        ?>
        
    </div>
    <div class="card">
        <img src="images\dong-ho-nam-hublot-classic-fushi.png" alt="" class="images__card">
        <div class="card__content">
            <div class="card__top">
                <h3 class="card__title">ROLEXXXX</h3>
                <p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facere
                    nobis aliquid laboriosam adipisci voluptatibus voluptatem.</p>
            </div>
            <div class="card__bottom">
                <span class="card__price">100000tr</span>
                <button class="card__cart">
                    Add Cart

                </button>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="images\dong-ho-nam-hublot-classic-fushi.png" alt="" class="images__card">
        <div class="card__content">
            <div class="card__top">
                <h3 class="card__title">ROLEXXXX</h3>
                <p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facereorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facereorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facereorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facere
                    nobis aliquid laboriosam adipisci voluptatibus voluptatem.</p>
            </div>
            <div class="card__bottom">
                <span class="card__price">100000tr</span>
                <button class="card__cart">
                    Add Cart

                </button>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="images\forman.png" alt="" class="images__card">
        <div class="card__content">
            <div class="card__top">
                <h3 class="card__title">ROLEXXXX</h3>
                <p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error beatae ex
                    incidunt
                    voluptates quasi quidem dolores repellat assumenda reiciendis iste doloremque, nemo quod
                    facere
                    nobis aliquid laboriosam adipisci voluptatibus voluptatem.</p>
            </div>
            <div class="card__bottom">
                <span class="card__price">10.000.000 VND</span>
                <button class="card__cart">
                    Add Cart

                </button>
            </div>
        </div>
    </div>


</div>