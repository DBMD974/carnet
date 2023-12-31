<?php include('Maconnexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Carnet D'Autosurveillance</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php include('header.php'); ?>



<div class="container">
    <h1>Semaine du: <input type="text" id="semaine" placeholder="Date de toute la semaine"></h1>
    <h2>Mon poids: <input type="text" id="poids" placeholder="Entrez votre poids"></h2>
</div>

<table>
    <tr>
        <th>Matin</th>
        <th>Midi</th>
        <th>Soirée</th>
    </tr>

    <tr>
        <!-- Matin -->
        <td class="gradient-box">
            <div class="column">
                <p>Glycémie du matin</p>
                <hr>
                <p>Insuline du petit déjeuner</p>
                <hr>
                <p>Glycémie après le petit déjeuner (2h après)</p>
            </div>
        </td>

        <!-- Midi -->
        <td class="gradient-box">
            <div class="column">
                <p>Glycémie du midi</p>
                <hr>
                <p>Insuline du déjeuner</p>
                <hr>
                <p>Glycémie après le déjeuner (2h après)</p>
            </div>
        </td>

        <!-- Soirée -->
        <td class="gradient-box">
            <div class="column">
                <p>Glycémie du soir</p>
                <hr>
                <p>Insuline du dîner</p>
                <hr>
                <p>Glycémie après le dîner (2h après)</p>
            </div>
        </td>

        <td>
            <!-- <td>&nbsp;</td> -->
            <p class="msg"> Evenements exceptionnels (hypoglycémies sévères avec leurs causes, si vous les retrouvez / repas inhabituel / activités physiques / maladies) </p>
        </td>
    </tr>


    <tr>

        <!-- <td class="out-of-frame">Lundi</td> -->
    <tr>
        <td class="gradient-box-lundi">
            <input type="text" name="lundiMatin" placeholder="Glycémie du matin">
            <input type="text" name="lundiMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="lundiMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
            <button type="submit" name="lundiMatinEnter">Enter</button>
        </td>
        <td class="gradient-box">
            <input type="text" name="lundiMidi" placeholder="Glycémie du midi">
            <input type="text" name="lundiMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="lundiMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
            <button type="submit" name="lundiMidiEnter">Enter</button>
        </td>
        <td class="gradient-box">
            <input type="text" name="lundiSoiree" placeholder="Glycémie du soir">
            <input type="text" name="lundiSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="lundiSoireeApres" placeholder="Glycémie après le dîner (2h après)">
            <button type="submit" name="lundiSoireeEnter">Enter</button>
        </td>
        <td>
            <input type="text" name="lundiEvenements" placeholder="Evenements exceptionnels">
            <button type="submit" name="lundiEvenementsEnter">Enter</button>
        </td>
    </tr>


    <!-- MARDI -->
    <tr>
        <!-- <td class="out-of-frame">Mardi</td> -->
        <td class="gradient-box">
            <input type="text" name="MardiMatin" placeholder="Glycémie du matin">
            <input type="text" name="MardiMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="MardiMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="MardiMidi" placeholder="Glycémie du midi">
            <input type="text" name="MardiMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="MardiMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="MardiSoiree" placeholder="Glycémie du soir">
            <input type="text" name="MardiSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="MardiSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="MardiEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>


    <!-- MERCREDI -->
    <tr>
        <!-- <td class="out-of-frame">Mercredi</td> -->
        <td class="gradient-box">
            <input type="text" name="MercrediMatin" placeholder="Glycémie du matin">
            <input type="text" name="MercrediMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="MercrediMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="MercrediMidi" placeholder="Glycémie du midi">
            <input type="text" name="MercrediMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="MercrediMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="MercrediSoiree" placeholder="Glycémie du soir">
            <input type="text" name="MercrediSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="MercrediSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="MercrediEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>



    <!-- JEUDI -->
    <tr>
        <!-- <td class="out-of-frame">Jeudi</td> -->
        <td class="gradient-box">
            <input type="text" name="JeudiMatin" placeholder="Glycémie du matin">
            <input type="text" name="JeudiMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="JeudiMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="JeudiMidi" placeholder="Glycémie du midi">
            <input type="text" name="JeudiMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="JeudiMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="JeudiSoiree" placeholder="Glycémie du soir">
            <input type="text" name="JeudiSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="JeudiSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="JeudiEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>


    <!-- VENDREDI -->
    <tr>
        <!-- <td class="out-of-frame">Vendredi</td> -->
        <td class="gradient-box">
            <input type="text" name="VendrediMatin" placeholder="Glycémie du matin">
            <input type="text" name="VendrediMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="VendrediMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="VendrediMidi" placeholder="Glycémie du midi">
            <input type="text" name="VendrediMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="VendrediMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="VendrediSoiree" placeholder="Glycémie du soir">
            <input type="text" name="VendrediSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="VendrediSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="VendrediEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>


    <!-- SAMEDI -->
    <tr>
        <!-- <td class="out-of-frame">Samedi</td> -->
        <td class="gradient-box">
            <input type="text" name="SamediMatin" placeholder="Glycémie du matin">
            <input type="text" name="SamediMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="SamediMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="SamediMidi" placeholder="Glycémie du midi">
            <input type="text" name="SamediMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="SamediMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="SamediSoiree" placeholder="Glycémie du soir">
            <input type="text" name="SamediSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="SamediSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="SamediEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>


    <!-- DIMANCHE -->
    <tr>
        <!-- <td class="out-of-frame">Dimanche</td> -->
        <td class="gradient-box">
            <input type="text" name="DimancheMatin" placeholder="Glycémie du matin">
            <input type="text" name="DimancheMatinInsuline" placeholder="Insuline du petit déjeuner">
            <input type="text" name="DimancheMatinApres" placeholder="Glycémie après le petit déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="DimancheMidi" placeholder="Glycémie du midi">
            <input type="text" name="DimancheMidiInsuline" placeholder="Insuline du déjeuner">
            <input type="text" name="DimancheMidiApres" placeholder="Glycémie après le déjeuner (2h après)">
        </td>
        <td class="gradient-box">
            <input type="text" name="DimancheSoiree" placeholder="Glycémie du soir">
            <input type="text" name="DimancheSoireeInsuline" placeholder="Insuline du dîner">
            <input type="text" name="DimancheSoireeApres" placeholder="Glycémie après le dîner (2h après)">
        </td>
        <td>
            <input type="text" name="DimancheEvenements" placeholder="Evenements exceptionnels">
        </td>
    </tr>

    <!-- la MOYENNE -->
    <tr>

        <td class="gradient-box">
            <p>0,80 mg min / 1,30 mg max</p>
        </td>
        <td class="gradient-box">
            <!-- La moyenne des valeurs de glycémie du midi -->
            <p>0,80 mg min</p>
        </td>
        <td class="gradient-box">
            <!-- La moyenne des valeurs de glycémie du soir -->
            <p>1,60 mg max</p>
        </td>
    </tr>

    <td>
        <button type="submit">Enregistrer</button>
    </td>


</table>



<!-- <td>
    <p class="msg"> Evenements exceptionnels (hypoglicemies severes avec leurs causes, si vous les retrouvez / repas inhabituel / activités physique / maladies) </p>
</td> -->








<?php include('footer.php'); ?>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>