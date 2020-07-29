<?php require '../Connexion.php'; ?>

<form method="POST" action="ajouter_reserv.php">
    <fieldset>
        <legend>Formulaire Reservation</legend>
        <p>
            <label>Numero</label> :
            <?php
            $sql = "SELECT COUNT(Numreservation) as HlitDernier FROM reservation";
            $requete = $connexion->query($sql);
            $resultat = $requete->fetch();
            $NumSuiv = ($resultat['HlitDernier'] + 1);
            ?>
            <input type="text" name="numreservation" value="<?php echo $NumSuiv ?>" readonly="true" />
        </p>
        <p>
            <label>Numero Client</label> :
            <select name="numcli">
                <?php
                $sql = "SELECT * FROM Client";
                $requete = $connexion->query($sql);
                $resutat = $requete->fetchAll(PDO::FETCH_ASSOC);

                foreach ($resutat as $ligne) { ?>
                    <option value="<?php echo $ligne['Numcli'] ?>"><?php echo $ligne['Nomcli'] ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label>Date reservation </label> : <input type="date" name="datereservation" />
        </p>
        <p>
            <label>Date arrive prevue</label> : <input type="date" name="datearriveprv" />
        </p>
        <p>
            <label>Date depart prevue</label> : <input type="date" name="datedepartprv" />
        </p>
        <p>
            <label>Caution </label> : <input type="text" name="caution" />
        </p>
        <p>
            <input type="submit" value="Reserver" />
            <input type="reset" value="Annuler" />
        </p>
    </fieldset>
</form>