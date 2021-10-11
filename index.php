<?php
include_once 'header.php';

?>
            <div class="header">
<?php
        if(isset($_SESSION["user"]))
        {
            echo "<h1> Welcome " .$_SESSION["user"]."</h1>";
        }
        ?>
            <h1>Argao Cemetery Mapping</h1>

            </div>
            <form> 
            <div class="search">
            <input type="text" placeholder="Search" name="search"/>
            <button><i class="material-icons">search</i></button> 
            </div>    
            </form>
            
            <div id="map" onload="initMap();"></div>
            <script src="js\All.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWLWw1JpZXDtMopAdvBBvBKP28dQ1uwTY&map_ids=e50bebc5c429891e&callback=initMap">
    </script>
            
            
        </body>
    </head> 
</html>

