<?php
/*
 * Created on 01.04.2024
 * Task: Die Teilnehmer sollen basierend auf dem Code der letzten Woche ein Registrierungsformular entgegennehmen.
 *          Die bestandteile des Formulars sind unten vorgegeben.
 *          Es soll eine Fallunterscheidung druchgeführt werden, abhängig davon, welche Funktion bei der Registrierung vorgenommen wird.
 *          Wenn ein Nutzer "Admin" auswählt, muss ein zusätzlicher Eintrag (Flag) zu den Daten hinzugefügt werden um zu signaisieren, dass eine solche Registrierung angekommen ist.
 *          Wenn ein Nutzer mit "Admin" registriert wurde soll im Responsetext auf die Registrierung stehen:
 *              "Danke für Ihre Registrierung Ihre Daten werden Validiert und wir nehmen mit Ihnen in kürze Kontakt auf."
 *          Wenn ein Nutzer "Nutzer" soll als Responsetext auf die Registrierung stehen:
 *              "Danke für Ihre Registrierunng, Sie können sich nun in das System mit Ihrer E-Mail adresse und dem gewählten Passwort einloggen"
 * 
 * Author: Max Musterman
 */
session_start();
if( !isset( $_SESSION['START'] ) ){
    $_SESSION['START'] = date('d.m.Y H:i:s');
}
// ============================================================================================================ //
//  ||
//  ||
//  \/
// Start from here
// content belongs right here
// ============================================================================================================ //




// ============================================================================================================ //
// ============================================================================================================ //
?>
<html>
    <header>
    </header>
    <body>
        <form enctype="multipart/form-data" name="projectform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Personendaten</p>
            <input type="text" name="salutation" placeholder="Anrede" value="">
            <input type="text" name="prename" placeholder="Vorname" value="">
            <input type="text" name="name" placeholder="Nachname" value="">
            <p>Adresse</p>
            <input type="text" name="street" placeholder="Straße" value="">
            <input type="text" name="housenumber" placeholder="H.-Nr" value="">
            <input type="number" name="zipcode" placeholder="Postleitzahl" value="">
            <input type="text" name="city" placeholder="Stadt" value="">
            <p>Kontakt</p>
            <input type="email" name= "text" placeholder="E-Mail" value="">
            <p>Welche Rolle haben Sie?</p>
            <select name="function"><option value=""></option><option value="nutzer">Nutzer</option><option value="admin">Admin</option></select>

            
            <!-- Checksum zur ueberprüfung des Submits -->
            <input style='display:none' name='CHECKSUM' type='hidden' value='<?php echo date('YmdHi');?>'>
            <br><br>
            <input type="submit" value="Daten übermitteln">
        
        </form>
    </body>
</html>
