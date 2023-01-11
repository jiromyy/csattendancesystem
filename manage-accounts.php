<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Accounts</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
      <link rel="stylesheet" href="css/account.css">
   </head>
   <body>
      <div class="container-lg">
         <div class="container-fluid">
            <table class="table table-striped sticky-top">
               <thead style="position: sticky; top: 0; background: white;">
                  <tr class="">
                     <th colspan="5">
                        <h3>Accounts</h3>
                     </th>
                     <th>
                     </th>
                  </tr>
                  <tr class="">
                     <th class="header" colspan="5">
                        <div class="search_bar">
                           <input type="text" name="search" value="search">
                        </div>
                     </th>
                     <th>
                        <a href="" class="btn btn-primary btn-lg" role="button">
                        Create</a>
                     </th>
                  </tr>
                  <tr>
                     <th>User Name</th>
                     <th>Password</th>
                     <th>Acount Type</th>
                     <th>Group/Organization</th>
                     <th>Last access</th>
                     <th class="text-right"></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>King_Jerome</td>
                     <td>iamjeromegwapo</td>
                     <td>Orgnaization Admin</td>
                     <td>Computer Science Society</td>
                     <td>10 hours ago</td>
                     <td class="btn-group-sm">
                        <a href="" class="btn btn-primary button-red btn-sm " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" role="button"><i class="material-icons md-18">delete_outline</i></a>
                        <a href="" class="btn btn-primary button-blue btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" role="button"><span class="material-icons-outlined">
                        edit
                        </span></a>
                        <a href="" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View" role="button"><span class="material-icons-outlined">
                        visibility
                        </span></a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>