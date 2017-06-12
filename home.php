
<?php 
session_start();

	if(isset($_SESSION['id']))
{
	
	echo "<p style='text-align:center'>WELCOME".$_SESSION['name']."</a></p>";
	$conn = mysqli_connect("localhost", "root", "root", "shop");
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    echo "<a href=home.php>HOME</a>";
    echo "<a href=cart.php>MY CART</a>";
      echo "<a href=logout.php>Logout</a>";
      function mycart()
      {
        $_SESSION['value']=0;
            $_SESSION['value']++;
      }
            echo "<center><table border=black><tr><th>pid</th><th>pname</th><th>pimage</th><th>price</th><th></tr>";
            while($row = mysqli_fetch_array($result))
            {

                echo "<tr><td>" . $row['pid'] . "</td><td>". $row['pname'] . "</td>";
            echo "<tr><td>""<input type='hidden' name= 'name' value='". $row['pname'] ."''>""</td></tr>";
             echo "<td>". $row['image'] . "</td>";
             echo "<tr><td>""<input type='hidden' name= 'name' value='". $row['pimage'] ."'>""</td></td>";



                echo  "<td><img src='".$row['pimage']."' width=50 height=50/></td>";
                 echo "<td>" . $row['price'] . "</td><td><input type='button' value='add to cart' name='submit'></td></tr>";
            }
            echo "</table></center>";
}
if($_POST)
{
    mycart();
    if(isset($_SESSION['func1']))
    {
        $temp=count($_SESSION['func1']);
        $product=array('pname'=>$_POST('pname')
                        'pimage'=>$_POST('pimage')
                        'price'=>$_POST('price'));
        $product=$_SESSION['func1'][$temp];
    }
    else
    {
        $product=array('pname'=>$_POST('pname')
                        'pimage'=>$_POST('pimage')
                        'price'=>$_POST('price'));
        $product=$_SESSION['func1'][0];

    }
}


else
{
    echo "<p style='text-align:center'>WELCOME guest</a></p>";

$conn = mysqli_connect("localhost", "root", "root", "shop");
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    echo "<a href=home.php>HOME</a>";
    echo "<a href=cart.php>MY CART</a>";
      echo "<a href=logout.php>Logout</a>";
      function mycart()
      {
        $_SESSION['value']=0;
            $_SESSION['value']++;
      }
      
            echo "<center><table border=black><tr><th>pid</th><th>pname</th><th>pimage</th><th>price</th><th></tr>";
            while($row = mysqli_fetch_array($result))
            {

                echo "<tr><td>" . $row['pid'] . "</td><td>". $row['pname'] . "</td>";
                echo  "<td><img src='".$row['pimage']."' width=50 height=50/></td>";
                 echo "<td>" . $row['price'] . "</td><td><input type='button' value='add to cart'></td></tr>";
            }
            echo "</table></center>";
        }	
        if($_POST)
{
    mycart();
    if(isset($_SESSION['func1']))
    {
        $temp=count($_SESSION['func1']);
        $product=array('pname'=>$_POST('pname')
                        'pimage'=>$_POST('pimage')
                        'price'=>$_POST('price'));
        $product=$_SESSION['func1'][$temp];
    }
    else
    {
        $product=array('pname'=>$_POST('pname')
                        'pimage'=>$_POST('pimage')
                        'price'=>$_POST('price'));
        $product=$_SESSION['func1'][0];

    }
}


?>




        


