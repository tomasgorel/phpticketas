<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css" type="text/css">
    <title>Formos</title>
</head>
<body>
<div class="container">
    <section>
        <!--        paspaudziame mygtuka-->
        <?php if (isset($_POST['send'])): ?>
            <!--    validuojame duomenis-->
<!--            ?php validate($_POST);?-->
           <!--    jeigu klaidu nera, masyvas yra tuscias, issaugome duomenis tekstiniame faile-->
<!--            ?php if(empty($validation)){-->
<!--                storeData();-->
<!--            }-->
<!--            ?-->
            <?php storeData(); ?>
        <?php endif ?>
    </section>
<!--  ?php  -->
<!--    jeigu masyve yra klaidu, tada jas atvaizduojame-->
<!--    if(isset($validation)){-->
<!--        foreach ($validation as $error){-->
<!--           echo $error;-->
<!--        }-->
<!--    }-->
<!--?-->

    <form method="post">
        <div class="form-group">
            <select class="form-control" id="flightNumberSelect" name="flightNumber">
                <option value="" disabled selected>--Flight number</option>
                <?php for ($i = 0; $i < count($flightNumber); $i++): ?>
                    <option value="<?=$flightNumber[$i]; ?>"><?= $flightNumber[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="personalCode">Personal code</label>
            <input type="text" class="form-control" id="personalCode" name="personalCode" aria-describedby="personalCodeHelp">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp">
        </div>
        <div class="form-group">
            <select class="form-control" id="fromSelect" name="from">
                <option value="" disabled selected>--From</option>
                <?php for ($i = 0; $i < count($from); $i++): ?>
                    <option value="<?=$from[$i]; ?>"><?= $from[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="destinationSelect" name="destination">
                <option value="" disabled selected>--To</option>
                <?php for ($i = 0; $i < count($destination); $i++): ?>
                    <option value="<?=$destination[$i]; ?>"><?= $destination[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="float" class="form-control" id="price" name="price" aria-describedby="priceHelp">
        </div>


        <div class="form-group">
            <select class="form-control" id="luggageSelect" name="luggage">
                <option value="" disabled selected>--Luggage</option>
                <?php for ($i = 0; $i < count($luggage); $i++): ?>
                    <option value="<?=$luggage[$i]; ?>"><?= $luggage[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Comments:</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="send">Print</button>
    </form>

    <?php if (($_POST['luggage']) ==$luggage[2]){
        $totalPrice=($_POST['price'] + 30);
        echo '<b>Total price: </b>'.$totalPrice;
    } else {
        echo '<b>Total price: </b>'.($_POST['price']);
    }
    echo "<br>";
    echo "<b>Price without luggage: </b>".($_POST['price']);
    echo "<br>";
    echo "<b>Luggage: </b>".($_POST['luggage']);
    echo "<br>";
    echo "<b>Flight number: </b>".($_POST['flightNumber']);
    echo "<br>";
    echo "<b>Personal code: </b>".($_POST['personalCode']);
    echo "<br>";
    echo "<b>Name, Lastname: </b>".($_POST['name'])." ".($_POST['lastname']);
    echo "<br>";
    echo "<b>Flight from: </b>".($_POST['from']);
    echo "<br>";
    echo "<b>Flight to: </b>".($_POST['destination']);
    ?>

    <table class="table table-bordered">
        <?php
        foreach(showData() as $message):?>
            <tr>
                <td><?=$message;?></td>
            </tr>
        <?php endforeach;?>

    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>