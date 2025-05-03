<?php
$path = "../";
$page = "Topic 3";
include($path . "inc/navbar.php");
?>
<div class="tutorial">
    <h1>File Permissions</h1>
    <p>
        This topic covers file permissions, what they do, how they work, and how to view/change them.
        The commands covered in this topic are:
        <ul>
            <li>chmod</li>
            <li>chown</li>
        </ul>
        If you feel that you are sufficiently familiar with these commands, we’d suggest moving on to Topic 4.
    </p>
    <p>
        Unix file permissions control who can read, write to, or execute a file.
        There are three Ownership levels:
        <ol>
            <li>Owner</li>
            <li>Group</li>
            <li>Others</li>
        </ol>
    </p>
    <p>
        Let’s create a file for this demonstration.
        <p class="codeExample">touch example.txt</p>
        We can now view the permissions of that file using ls:
        <p class="codeExample">ls -l example.txt</p>
        The permissions of your file may vary slightly.
    </p>
    <h2>chmod</h2>
    <p>
        We can change the permissions of this file using the chmod command.
        The chmod command allows you to assign permissions either with a specific [command],
        or by using a numerical value.
        <table>
            <tr>
              <th>Number</th>
              <th>Binary</th>
              <th>Permissions</th>
            </tr>
            <tr>
              <td>0</td>
              <td>000</td>
              <td>None</td>
            </tr>
            <tr>
              <td>1</td>
              <td>001</td>
              <td>Execute</td>
            </tr>
            <tr>
              <td>2</td>
              <td>010</td>
              <td>Write</td>
            </tr>
            <tr>
              <td>3</td>
              <td>011</td>
              <td>Write & Execute</td>
            </tr>
            <tr>
              <td>4</td>
              <td>100</td>
              <td>Read</td>
            </tr>
            <tr>
              <td>5</td>
              <td>101</td>
              <td>Read & Execute</td>
            </tr>
            <tr>
              <td>6</td>
              <td>110</td>
              <td>Read & Write</td>
            </tr>
            <tr>
              <td>7</td>
              <td>111</td>
              <td>Read, Write, & Execute</td>
            </tr>
          </table>
          Setting the file permissions to “755”, for example, would do the following:
          <ul>
            <li>7 - The Owner - Can read, write, and execute</li>
            <li>5 - The Group - Can read and execute</li>
            <li>5 - Everyone else - Can read and execute</li>
          </ul>
          Let’s try to assign these permissions to the file:
          <p class="codeExample">chmod 755 example.txt</p>
          Now, lets run the ls command again
          <p class="codeExample"> ls -l example.txt</p>
          ls -l example.txt
          Your file permissions should show as: "-rwxr-xr-x"
          <p class="info">Note the ‘-’ in the front. This indicates that it’s a standard file. 
            If it were a directory, it’d look like this: "drwxr-xr-x"</p>
          <h2>chown</h2>
          <p>
            What if you want to change the owner of a file altogether?
            For that, we can use the chown command.<br>
            To change the owner, use:
            <p class="codeBlock">chown [username] [filename]</p>
            To change the owner group, use:
            <p class="codeBlock">chown :[group name] [filename]</p>
          </p>
    </p>
</div>
<?php
include($path . "inc/footer.php");
?>
