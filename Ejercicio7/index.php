<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combos Dependientes de Distrito y Zona</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card-header bg-primary text-white mt-4 mb-4 p-1">
            <h1 class="mb-4 text-center">
                Combos Dependientes de Distrito y Zona
            </h1>
        </div>
        <form id="registro-form">
            <div class="mb-3">
                <label for="distrito" class="form-label">Distrito</label>
                <select id="distrito" name="distrito" class="form-select">
                    <option value="">Seleccione un distrito</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="zona" class="form-label">Zona</label>
                <select id="zona" name="zona" class="form-select" disabled>
                    <option value="">Seleccione una zona</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'saca_distritos.php',
                type: 'GET',
                success: function(data) {
                    $('#distrito').append(data);
                }
            });

            $('#distrito').change(function() {
                var distrito = $(this).val();
                $('#zona').prop('disabled', !distrito); 
                $('#zona').html('<option value="">Seleccione una zona</option>');
                
                if (distrito) {
                    $.ajax({
                        url: 'saca_zonas.php',
                        type: 'GET',
                        data: { distrito: distrito },
                        success: function(data) {
                            $('#zona').append(data);
                        }
                    });
                }
            });

            $('#registro-form').submit(function(e) {
                e.preventDefault(); 
                
                var distrito = $('#distrito').val();
                var zona = $('#zona').val();
                
                if (distrito && zona) {
                    window.location.href = 'MuestraCatastros.php?distrito=' + encodeURIComponent(distrito) + '&zona=' + encodeURIComponent(zona);
                } else {
                    alert('Por favor, seleccione tanto un distrito como una zona.');
                }
            });
        });
    </script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>