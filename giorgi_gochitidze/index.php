<!DOCTYPE html>
<html>
<head>
<title>gia</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wraper">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="input">
            <label>სახელი</label>
                <input type="text" name="firstname" placeholder="სახელი" />
                
            </div>
            <div class="input">
            <label>გვარი</label>
                <input type="text" name="lastname" placeholder="გვარი" />
                
            </div>
            <div class="input avatar">
            <label>სურათი</label>
                <input type="file" name="avatar" id="avatar" />
                
            </div>

            <div class="input submit">
                <input type="submit" name="get_image" value="შენახვა">
            </div>
            
        </form>

        <?php
            if(isset($_FILES['avatar'])){
                $uploaddir = 'img/';
                    $uploadfile = $uploaddir . basename($_FILES['avatar']['name']);

                    move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);

                    echo "<div class='avatar-img'>
                        <img src=".$uploadfile.">
                        <div>სახელი: ".$_POST["firstname"]."</div>
                        <div>გვარი: ".$_POST["lastname"]."</div>
                    </div>";
            }else{
                echo "<div class='avatar-img'>თქვენი ავატარის ადგილი</div>";
            }
        ?>

    </div>
</body>

</html>