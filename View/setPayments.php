<?php

?>

<h1>Saisie des Paiements</h1>

<form action="" method="post" style="display: flex; flex-flow: column wrap">
    <div>
        <label for="sum">Montant payé</label>
        <input type="text" name="sum" id="sum">        
    </div>
    <div>
        <label for="type">Mode de paiement</label>
        <select name="type" id="type">
            <option value="0">options définies dans wp_options</option>
        </select>
    </div>
        <label for="status">Statut de l'insctiption</label>
        <select name="status" id="status">
            <option value="0">à définir</option>
        </select>
    </div>
    <div>
        <label for="user">Utilisateur</label>
        <select name="user" id="user">
            <option value="0">nom user</option>
        </select>    
    </div>
    <div>
        <label for="order">Commande</label>
        <select name="order" id="order">
            <option value="0">commande x</option>
        </select>
    </div>
    <div>
        <label for="stillDue">Reste à payer</label>
        <input type="text" name="stillDue" id="stillDue">  
    </div>

    <?php submit_button('VALIDER', 'primary', 'submit') ?>
</form>

