<!DOCTYPE html>
<html>
  <head>
    <title>Update Account</title>
  </head>
  <body>
    <h1>Update Account</h1>
    <form action="{{route('post.update',[$id=1])}}" method="post">
        @csrf
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>

      <label for="password">New Password:</label>
      <input type="password" id="password" name="password" required><br><br>

      <label for="email">New Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <input type="submit" value="Update Account">
    </form>
  </body>
</html>
