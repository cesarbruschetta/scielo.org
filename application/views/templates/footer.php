<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer class="">
    <div class="collectionSignature">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <span class="logo-svg-footer"></span>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-8 adress-footer">
                    <?= $this->Footer->get_signature() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="partners">
        <?php foreach($this->Footer->get_partners() as $partner):?>
            <a href="<?= $partner->get_link() ?>" target="_blank"><img src="<?=  $partner->get_logo() ?>" alt="<?= $partner->get_name() ?>" title="<?= $partner->get_name() ?>"></a>
        <?php endforeach;?>
    </div>
    <div class="container collectionLicense">
        <a href="/collection/about/" class="ico-oa">
            <?= $this->Footer->get_open_access_declaration() ?>
        </a>
    </div>
</footer>