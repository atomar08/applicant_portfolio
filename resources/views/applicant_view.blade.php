<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <body>
  <div class="container">    
     <br />
     <h3 align="center"></h3>
     <br />
  
    <TABLE  BORDER=1 CELLSPACING=0 CELLPADDING=6>
   
    <thead>
            <tr>
                <th>Job</th>
                <th>Applicant Name</th>
                <th>Email Address</th>
                <th>Website</th>
                <th>Skills</th>
                <th>Cover Letter Paragraph</th>
            </tr>
           </thead>
   
   <tbody>
           @foreach($data as $task)
           <tr>
            <td>{{ $task->job_name }}</td>
            <td>{{ $task->applicant_name }}</td>
            <td>{{ $task->email }}</td>
            <td>{{ $task->website }}</td></a>
            <td>{{ $task->skills}}</td>
            <td>{{ $task->cover_letter}}</td>
            
            </tr>
            @endforeach

           </tbody>
</table>
</div>

</body>
</html>