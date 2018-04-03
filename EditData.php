<html>

<head>
  <title>Edit Data
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }

    th {
      background-color: #003366;
      color: white;
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="container-fluid">
      <h1>Edit management
      </h1>
    </div>
  </header>

  <div class="center">
    <div class="form-item form-type-textfield form-group">
<?php 
    $key = isset($_POST['id']) ? $_POST['id'] : 0;

    var_dump($key);
?>
      <!-- <form action="Line_master.php" class="form-horizontal" method="post">
        <fieldset> -->
      <div>
        <label class="control-label" for="edit-key">Key
        </label>
        <input class="form-control form-text" type="text" id="insert-key" name="key" size="40" maxlength="255" placeholder="Type it here">
      </div>

      <div>
        <label class="control-label" for="edit-key">Value
        </label>
        <textarea rows="4" cols="50" class="form-control form-text" type="text" id="insert-value" name="value" size="40" maxlength="255"
          placeholder="Type it here"></textarea>
      </div>

      <div>
        <label class="control-label" for="edit-key">Comment
        </label>
        <textarea rows="4" cols="50" class="form-control form-text" type="text" id="insert-comment" name="comment" size="40" maxlength="255"
          placeholder="Type it here"></textarea>
      </div>

      <divstyle="padding-top: 25px">
        <div>
          <button id="btn-save" type="submit" class="btn btn-success">Save</button>
        </div>
        <!-- </fieldset>
      </form> -->
    </div>
  </div>
  </div>
  <script>
    var config = {
	    apiKey: "AIzaSyBCXvufpin_C3BrQCio1ZT7MihqnZuciN0",
	    authDomain: "ksbot-test.firebaseapp.com",
	    databaseURL: "https://ksbot-test.firebaseio.com",
	    projectId: "ksbot-test",
	    storageBucket: "ksbot-test.appspot.com",
	    messagingSenderId: "371500888649"
	  };
    firebase.initializeApp(config);
	  
	  var id = '<?=$_POST['id']?>';
	  
	  console.log(id);
	  
	  
  </script>

</body>

</html>
