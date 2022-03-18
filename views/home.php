<div class="container">
    
    <div class="row">
        <div class="col-4" >
            <!-- todo form  -->
            <h1 class="text-secondary text-capitalize"> TODO FORM </h1>
            <form action="/controller/save.php" method="POST">

                <div class="mb-3">
                    <label for="id_task_name">Task Name</label>
                    <input type="text" name="task_name" id="id_task_name" placeholder="Your tasks name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="id_task_desc">Description of your task.</label>
                    <textarea id="id_task_desc" name="task_desc" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" name="push_button" class="btn btn-primary">Push</button>
                </div>
            </form>
        </div>
        <div class="col-8" >
            <table class="table-responsive">
               <thead class="text-uppercase">
                   <tr>
                       <th>Task</th>
                       <th>Description</th>
                       <th> Added On </th>
                   </tr>
               </thead>
               <tbody>
                <tr>
                    <td> Finder </td>
                    <td> Fucking world </td>
                    <td> 01 March, 2022 </td>
                </tr>
               </tbody>
            </table>
        </div>
    </div>
</div>