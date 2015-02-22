<html>

<head>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/index.js"></script>
  <link rel="stylesheet" href="/css/index.css">

</head>


<body class="body-noise">

  <?php 
    require("/php/navigation.php");
    nav();
  ?>

  <div class="jumbotron" class="noise">
    <div align="center">
      <h2>Create your Team!</h2>
    </div>
    <br>

    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 table-responsive">
          <table class="table table-bordered table-hover table-sortable" id="tab_logic">
            <thead>
              <tr>
                <th class="text-center">
                  Pokemon
                </th>
                <th class="text-center">
                  Characteristics
                </th>
                <th class="text-center">
                  Moveset
                </th>
                <th class="text-center">
                  Option
                </th>

              </tr>
            </thead>
            <tbody>
              <tr id='addr0' data-id="0" class="hidden">
                <td data-name="name">
                  <img src="http://placehold.it/140x100" alt="Pokemon Name"></img>
                  <input type="text" name='name0' placeholder='Name' class="form-control" />
                </td>
                <td data-name="mail">
                  <input type="text" name='mail0' placeholder='Characteristics' class="form-control" />
                </td>
                <td data-name="desc">
                  <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
                </td>
                <td data-name="sel">
                  <select name="sel0">
                    <option value "">Select Option</option>
                    <option value "1">Defensive Core</option>
                    <option value "2">Offensive Core</option>
                    <option value "3">Gimmick</option>
                  </select>
                </td>
                <td data-name="del">
                  <button nam "del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <a id="add_row" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Teammate</a>
      <a id="save_database" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span> Save Team</a>
      <a class="btn btn-sm btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span> Reset Team</a>

    </div>


  </div>

</body>

</html>