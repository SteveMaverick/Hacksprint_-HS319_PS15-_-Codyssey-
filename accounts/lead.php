<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/c14caa40e6.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="http://stevemaverick221b-com.stackstaging.com/Hackathon/lead.css">

<title>Lead</title>

</head>
<body>
  <div class="grid-container">


    <header class="header">
      <div class="header__avatar">Lead</div>
      <div class="logout-link">
        <a href="../index.php?function=logout">
          <div class="header__avatar">Logout</div><span title="Logout" class="glyphicon glyphicon-log-in"
            style="size: 1em;"></span>
        </a>
      </div>
    </header>

    <div class="modals">
        <div class="modal fade" id="dismiss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              Do you want to dismiss this request ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary req_dismiss">Yes</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Change task: </h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label ">Task Name:</label>
                  <input type="text" class="form-control newtask" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Description:</label>
                  <textarea class="form-control  newdescrip" id="message-text"></textarea>
                </div>
                    <div class="form-group">
                  <label for="message-text" class="col-form-label ">Deadline:</label>
                  <input type="date" class = "new_deadline" id="message-text">
                </div>

                   <label for="cars">Choose a resource:</label>
                <select style="padding-left: 80px;margin-left: 30px;margin-top: 8px; overflow-y: auto;font-size: 1.3em;"
                  id="cars" class = "new_res" name="cars">
                    <option label=" "></option> 
                  <? displayLeaderResources() ; ?> 
                </select>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary modify">Modify</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Delete</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this task?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary delbutton">Yes</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Add Task: </h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label ">Task Name:</label>
                  <input type="text" class="form-control create_task_name" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Description:</label>
                  <textarea class="form-control  create_description" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label ">Deadline:</label>
                  <input type="date" class = "create_deadline" id="message-text">
                </div>


                  
                <label for="cars">Choose a resource:</label>
                <select style="padding-left: 80px;margin-left: 30px;margin-top: 8px; overflow-y: auto;font-size: 1.3em;"
                  id="cars" class = "create_resource" name="cars">
                  <? displayLeaderResources() ; ?> 
                </select>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary create_task" data-dismiss="modal">Create Task</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="reassign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Reassign task: </h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
              
                <div class="form-group">

                  <label for="cars">Choose a new resource:</label>
                  <select
                    class = "reassignresource" style="padding-left: 80px;margin-left: 30px;margin-top: 8px; overflow-y: auto;font-size: 1.3em;"
                    id="cars" name="cars">
               <? displayLeaderResources() ; ?>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary re_button">Reassign</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <main class="main">
      <div class="main-header">
        <div class="task-status">
          <div class="main-header__heading" style="font-size: 35px ; 
    color:white ; "><? displayName() ; ?></div>
          <div class="main-header__updates" style="font-size: 25px ; 
    color:white ; ">Here's what on your plate !</div>
        </div>
      </div>
      <div class="card" id="dashboard">
       <? displayLeaderTable() ; ?>
    </div>



      <div class="main-cards">
        <div class="card" id="projects">
          <div class="task-title"> Projects

          </div>

          <div class="list">

            <ul class="list-group list-group-flush projects">
             <?displayLeadProject() ; ?>

                
              

            </ul>



          </div>

        </div>

        <div class="card" id="tasks">
          <div class="task-title"> Tasks
            <div class="add-button">
              <button class="list-button" data-toggle="modal" data-target="#add"
                style="background-color:transparent; border: none;"><span title="Add Task" class="fas fa-plus"
                  style="font-size: 1em;"></span></button>
            </div>
          </div>

          <div class="list">
            <ul class="list-group list-group-flush list_tasks">
            

            </ul>



          </div>

        </div>

        <div class="card" id="description">
          <div class="para">
            <h4>Task Change Request: </h4>
            <div class="list">
              <ul class="list-group list-group-flush crs">
               
                  
                  
                            <? displayRequest() ;?>
                    <!--button 1-->
                    
                

              </ul>



            </div>
          </div>
        </div>
        <div class="card" id="description">
          <div class="para">
            <h4>New Task Request: </h4>
            <div class="list">
              <ul class="list-group list-group-flush">
                <div class="list-item-wrapper">
                
                  <li class="list-group-item">
                      Resource Name
                    


                  </li>
                </div>

              </ul>



            </div>
          </div>
        </div>

      </div>
  </div>
  </main>

  </div>
  </div>

</body>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="http://stevemaverick221b-com.stackstaging.com/Hackathon/accounts/lead.js"></script>
</html>