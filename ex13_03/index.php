<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <!--Navbar-->
          <nav class="navbar navbar-dark navbar-expand-lg bg-primary" >
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Consultar</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--Navbar-->
        <p class="fs-2">Cadastrar</p>
        <p class="fs-4">Seila</p>
        <form>
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputTel" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="exampleInputTel">
          </div>
            <div class = "mb-3" >
            <label class="form-label">Cidade</label>
              <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Cidade</option>
                <option value="1">Sao Paulo</option>
                <option value="2">Xique Xique</option>
                <option value="3">Floripa</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="data" class="form-label">Data de contato</label>
              <input type="date" class = "form-control" id = "data">
            </div>
            <div class ="mb-3" id="Textarea">
            <label class="form-label">Observação:</label>
              <textarea class="form-control p5"></textarea>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
  </body>
</html>