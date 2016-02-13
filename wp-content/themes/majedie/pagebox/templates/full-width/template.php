<?php //global $post; ?>

<div class="container main-container">

    <div class="container-inset clear-both-fix">

        <div class="container-bar clear-both-fix">

        </div><!-- .container-bar -->


        <!--<div class="main-content-article">-->
        <div class="template-full-width">

            <div class="span-table ">
                <div class="span_24 overflow-hidden">

                    <?php foreach ($this->get_variable( 'full_width_modules' ) as $module): ?>

                        <?php $module->display(); ?>

                    <?php endforeach ?>

                </div>

            </div><!-- .jsheight -->

        </div><!-- .template-full-width -->

    </div><!-- .container-inset -->

</div><!-- .container -->