<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
</head>

<style>
    .lists{
        display:flex;
        list-style-type:none;
        align-items:center;
    }
    .navbar{
        display:flex;
        justify-content:space-between;
    }
    li{
        padding:0px 10px;
    }
</style>

<body>
    <header>
        <div class="navbar">
        <h1>HOME</h1>
            <ul class="lists">
                <li>ToDo</li>
                <li>Doing</li>
                <li>Done</li>
                <li>dfsddf</li>
            </ul>
        </div>
    </header>

    <main>
        <button type="button">Add Task</button>
        <table>
            <thead>
                <tr>
                    <th>
                        S.N
                    </th>
                    <th>
                        Task ID
                    </th>
                    <th>
                        Task Name
                    </th>
                    <th>
                        Task Description
                    </th>
                    <th>
                        Deadline
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
        </table>
    </main>
</body>
</html>