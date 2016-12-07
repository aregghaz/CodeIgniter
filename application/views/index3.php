<!DOCTYPE html>
<html>
<head>
    <title>Task1</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">

</head>
<style>

     #form2,#form3 {
        width: 300px;
        margin:20px auto;
        text-align: center;
    }

    #form2 {
        margin-top: 50px;
    }

    #table {
        width: 800px;
        margin: 30px auto;
        text-align: center;

    }
</style>
<body>
<form action="http://127.0.0.1/CodeIgnite/" id="form3" method="post">
    <button class="positive ui button" type="submit">Back to home page</button>
</form>


<form class="ui form" action="http://127.0.0.1/CodeIgnite/index.php/user/articles" method="post" id="form2">
    <div class="field">
        <label>First Name2</label>
        <input type="text" name="first-name2" title="first-name2" placeholder="First name2">
    </div>
    <div class="field">
        <label>Last Name2</label>
        <input type="text" name="last-name2" placeholder="Last Name2" title="Last Name2">
    </div>
    <div class="field">
        <label>Keywords2</label>
        <input type="text" name="keywords2" title="keywords2" placeholder="keywords">
    </div>

    <button class="ui button" name="addd" value="submit" type="submit">Search</button>

</form>

<table class="ui five column table" ID="table">


    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Keywords</th>
        <th>Resume</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php if ($task) { ?>

        <?php foreach ($task as $item): ?>
            <tr>
                <td><?= $item['firstname'] ?></td>
                <td><?= $item['lastname'] ?></td>
                <td><?= $item['keywords'] ?></td>
                <td><?= $item['origname']?> resume</td>
                <td>
                   <a href="http://127.0.0.1/CodeIgniter/index.php/user/articles2/<?php echo $item['id']?>/">открыть</a>
                </td>
            </tr>

        <?php endforeach ?>
    <?php }; ?>

    </tbody>
</table>


</body>
</html>

