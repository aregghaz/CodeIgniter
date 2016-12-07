<!DOCTYPE html>
<html>
<head>
    <title>Task1</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">

</head>
<style>

    #form, #form2 {
        width: 300px;
        margin: 0 auto;
        text-align: center;
    }
    #form2 {
        margin-top: 50px;
    }
    .error_div, .ok_div {
       color: red;
        border: 1px solid;
        width: 635px;
        display: block;
        text-align: center;
        margin: 0 auto;
        font-size: xx-large;
        height: 40px;
        line-height: normal;
    }
    .ok_div {
        color: green; !important;
        height: 80px; !important;
    }
</style>
<body>

<form class="ui form" action="#" method="post" enctype="multipart/form-data" id="form">
    <div class="field">
        <label>First Name</label>
        <input type="text" name="first-name" id="first-name"  value="<?= set_value('first-name');?>" title="first-name" placeholder="First name" required> <?php echo form_error('first-name'); ?>
    </div>
    <div class="field">
        <label>Last Name</label>
        <input type="text" name="last-name" id="last-name" placeholder="Last Name"  value="<?= set_value('last-name'); ?>" title="Last Name" required><?php echo form_error('last-name'); ?>
    </div>
    <div class="field">
        <label>Keywords</label>
        <input type="text" name="keywords" id="keywords" value="<?= set_value('keywords'); ?>" title="keywords" placeholder="keywords" required> <?php echo form_error('keywords'); ?>
    </div>
    <div class="field">
        <label>Resume attach</label>
        <input type="file" name="userfile" placeholder="keywords" required>
    </div>
    <button class="ui button" name="add" value="submit" type="submit">Submit</button>

</form>

<form class="ui form" action="http://127.0.0.1/CodeIgnite/index.php/user/articles" method="post" id="form2">
    <div class="field">
        <label>First Name</label>
        <input type="text" name="first-name2" title="first-name2" placeholder="First name" >
    </div>
    <div class="field">
        <label>Last Name</label>
        <input type="text" name="last-name2" placeholder="Last Name"   title="Last Name2">
    </div>
    <div class="field">
        <label>Keywords</label>
        <input type="text" name="keywords2" title="keywords2" placeholder="keywords">
    </div>

    <button class="ui button" name="addd" >Search</button>

</form>



</body>
</html>
