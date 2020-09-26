<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/c14caa40e6.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="http://stevemaverick221b-com.stackstaging.com/Hackathon/resource.css">
<title>Resource</title>
</head>

<body>
  <div class="grid-container">


    <header class="header">
      <div class="header__avatar">Resource</div>
      <div class="logout-link">
        <a href="../index.php?function=logout">
          <div class="header__avatar">Logout</div><span title="Logout" class="glyphicon glyphicon-log-in"
            style="size: 1em;"></span>
        </a>
      </div>
    </header>

    <div class="modals">
      <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Request for task change: </h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Task Name:</label>
                  <div class="task-name change-request-title">
                    
                  </div>
                </div>
            
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary req_change">Request Change</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Submit</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to submit the task?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary task_complete">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <main class="main">
      <div class="main-header">
        <!-- curcular progress bars-->



        <div class="task-status">
          <div class="main-header__heading" style="font-size: 35px ; 
    color:white ; "><? displayName();?></div>
          <div class="main-header__updates" style="font-size: 25px ; 
    color:white ; ">Here's what's on your plate</div>
        </div>
        <div class="statuses">
        <div class="status">
            <? displayNewCount() ;  ?>
          <br>
          <div class="label">
          New
        </div>
        </div>
        <div class="status">
          1 
          <br>
          <div class="label">
          In-Progress
        </div>
        </div>
        <div class="status">
          1 
          <br>
          <div class="label">
          Backlog
        </div>
        </div>
      </div>
      </div>



      <div class="main-cards">
        <div class="card" id="tasks">
          <div class="task-title"> Tasks
            <div class="task-category">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
                  <span class="caret"></span></button>
                <ul  class="dropdown-menu category">
                    <li><a href="#">All Tasks</a></li>
                    <li><a href="#">New Tasks</a></li>
                  <li><a href="#">In-Progress Tasks</a></li>
                  <li><a href="#">Backlog Tasks</a></li>
                </ul>
              </div>
            </div>
            
          </div>

          <div class="list">
            <ul class="list-group list-group-flush res_tasks">
                <? displayResTasks("All Tasks") ; ?>
           

            </ul>



          </div>

        </div>
        <div class="card" id="description">
            <div class="task-title">Task info</div>
              <div class="para">
                
             </div>
            

      </div>
    </main>

  </div>
  

</body>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="http://stevemaverick221b-com.stackstaging.com/Hackathon/accounts/res.js"></script>
</html>