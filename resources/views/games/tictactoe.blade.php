<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe</title>

    <link rel="stylesheet" href="{{asset('xo/style.css')}}">

</head>

<body>

<div class="col text-left pr-0">
    <button id="btn-game-section-home" type="button" data-toggle="button" class="btn btn-xl btn-info btn-text btn-xl-focus-none">
        <a href="{{route('index')}}">Back to site</a>
    </button>
</div>

                        <table >
                            <tr>
                                <td class="cell" id="0"></td>
                                <td class="cell" id="1"></td>
                                <td class="cell" id="2"></td>
                            </tr>
                            <tr>
                                <td class="cell" id="3"></td>
                                <td class="cell" id="4"></td>
                                <td class="cell" id="5"></td>
                            </tr>
                            <tr>
                                <td class="cell" id="6"></td>
                                <td class="cell" id="7"></td>
                                <td class="cell" id="8"></td>
                            </tr>
                        </table>
                        <div class="endgame">
                            <div class="text"></div>
                            <button onclick="startGame()">Replay</button>
                            <script src="{{asset('xo/script.js')}}"></script>

                        </div>
                
</body>

</html>
