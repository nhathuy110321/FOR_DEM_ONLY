<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="tutorials.css">
    <title>Automation Actions Site</title>
</head>

<body class="body-main">
    <div>
    <?php include "./directive/header.php" ?>
        <div class="forum-header">
            <div class="Forum-h2">
                <h2>AUTOMATION ACTIONS SITE</h2>
            </div>
        </div>
        <div class="Acctions-site">
            <div class="container-actions">
                <div id="Action" onclick=" showcontainerdrap(1)" >
                    <a href="#" > Portlets</a>
                </div>
                <div id="Action" onclick=" showcontainerdrap(2)" >
                    <a href="#" > Multiple Lists</a>
                    
                </div>
               <div id="Action"onclick=" showcontainerdrap(3)" > 
                    <a href="#" > Simple List</a>
                    
                </div>
                <div id="Action" onclick=" showcontainerdrap(4)">
                    <a href="#"> Grid Sorting</a>
                 
                </div>
                <div id="Action"onclick=" showcontainerdrap(5)" >
                    <a href="#"> Accepted Elements</a>
                
                </div> 
            </div>
            <div  id="containerdrap1" class="container-drap">
                <div class="error">

                    <p>Re-Order Elements provided. For Ex : Move Car to Motobike place</p>
                    <i class="bi bi-x" id="close-icon"></i>
                </div>
                <script>
                    const closeIcon = document.querySelector('#close-icon');
                    const alertBox = document.querySelector('.error');

                    closeIcon.addEventListener('click', function () {
                        alertBox.style.display = 'none';
                    });
                </script>
                <div class="Container-drop">
                    <div class="drap-and-drop" draggable="true">
                        <div id="car">
                            <h4>Car</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>
                    <div class="drap-and-drop" draggable="true">
                        <div id="car">
                            <h4>Motorbike</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>

                    <div class="drap-and-drop" draggable="true">
                        <div id="car">
                            <h4>Airplane</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>
                </div>
                <div class="Container-drop1">
                    <div class="drap-and-drop" draggable="true">
                        <div id="car">
                            <h4>Train</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>
                    <div class="drap-and-drop h" draggable="true">
                        <div id="car">
                            <h4>Ferry</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>
                    <div class="drap-and-drop" draggable="true">
                        <div id="car">
                            <h4>Ferry</h4>
                            <i class="bi bi-dash"></i>
                        </div>
                        <p>
                            Selenium Automation.
                        </p>
                    </div>
                </div>
            </div>
            <div   id="containerdrap2" class="container-drap">
                <div class="error">
    
                    <p>Re-Order elements of both the lists and swap them if needed</p>
                    <i class="bi bi-x" id="close-icon"></i>
                </div>
                <script>
                   
    
                    closeIcon.addEventListener('click', function () {
                        alertBox.style.display = 'none';
                    });
                </script>
                <div class="list-object">
                    <div class="simple-list-object2">
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 1</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 2</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 3</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 4</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 5</p>
                        </div>            
                    </div>
                    <div class="simple-list-object3">
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 1</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 2</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 3</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 4</p>
                        </div>
                        <div id="object">
                            <i class="bi bi-arrows-expand"></i>
                            <p> Object 5</p>
                        </div>            
                    </div>
                </div>   
            </div>
            <div id="containerdrap3" class="container-drap">
                <div class="error">
    
                    <p>Re-Order elements of the list from Object 1 to 7</p>
                    <i class="bi bi-x" id="close-icon"></i>
                </div>
                <script>
                    
                    closeIcon.addEventListener('click', function () {
                        alertBox.style.display = 'none';
                    });
                </script>
                <div class="simple-list-object">
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 1</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 2</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 3</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 4</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 5</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 6</p>
                    </div>
                    <div id="object">
                        <i class="bi bi-arrows-expand"></i>
                        <p> Object 7</p>
                    </div>
    
                </div>
    
            </div>
            <div id="containerdrap4" class="container-drap">
                <div class="error">
    
                    <p>Re-Order Grid elements in descending order.</p>
                    <i class="bi bi-x" id="close-icon"></i>
                </div>
                <script>
                   
    
                    closeIcon.addEventListener('click', function () {
                        alertBox.style.display = 'none';
                    });
                </script>
                <div class="alpha-list">
                    <div id="alpha">
                        <p>A</p>
                    </div>
                    <div id="alpha">
                        <p>B  </p>
                    </div>
                    <div id="alpha">
                        <p>C</p>
                    </div>
                    <div id="alpha">
                        <p>D</p>
                    </div>
                </div>
                <div class="alpha-list">
                    <div id="alpha">
                        <p>E</p>
                    </div>
                    <div id="alpha">
                        <p>F </p>
                    </div>
                    <div id="alpha">
                        <p>G</p>
                    </div>
                    <div id="alpha">
                        <p>H</p>
                    </div>
                </div>
                <div class="alpha-list">
                    <div id="alpha">
                        <p>I</p>
                    </div>
                    <div id="alpha">
                        <p>J</p>
                    </div>
                    <div id="alpha">
                        <p>K</p>
                    </div>
                    <div id="alpha">
                        <p>L</p>
                    </div>
                </div>
                
            </div>
            <div id="containerdrap5" class="container-drap">
                <div class="error">
    
                    <p>Specify using the “accept” option which element (or group of elements) is accepted by the target droppable.</p>
                    <i class="bi bi-x" id="close-icon"></i>
                </div>
                <script>
                    
                    closeIcon.addEventListener('click', function () {
                        alertBox.style.display = 'none';
                    });
                </script>
                <div class="Accepted-draggable">
                    <div class="Draggable">
                            <p id="Draggable-p">I'm draggable but can't be dropped</p>
                    </div>
                    <div  class="Draggable">
                        <p id="Draggable-p2">Drag me to my target</p>
                    </div>
                    <div  class="Draggable3">
                        <p id="Draggable-p2">Drag me to my target</p>
                    </div>
                </div>
            </div>

        </div>

        <!--  -->
        <script>

            function showcontainerdrap(n) {
                    var i;
                    var  containerdraps = document.getElementsByClassName("container-drap");
                   
                    
                    for (i = 0; i < containerdraps.length; i++) {
                        containerdraps[i].style.display = "none";

                    }
                    document.getElementById("containerdrap" + n).style.display = "block";

                    
                    
                }

            const draggables = document.querySelectorAll('.drap-and-drop');
            let dragSrcEl = null;

            for (let i = 0; i < draggables.length; i++) {
                const draggable = draggables[i];

                draggable.addEventListener('dragstart', dragStart);
                draggable.addEventListener('dragenter', dragEnter);
                draggable.addEventListener('dragover', dragOver);
                draggable.addEventListener('dragleave', dragLeave);
                draggable.addEventListener('drop', drop);
                draggable.addEventListener('dragend', dragEnd);
            }

            function dragStart(e) {
                dragSrcEl = this;
                e.dataTransfer.effectAllowed = 'move';
                e.dataTransfer.setData('text/html', this.innerHTML);
            }

            function dragEnter(e) {
                this.classList.add('over');
            }

            function dragOver(e) {
                e.preventDefault();

                e.dataTransfer.dropEffect = 'move';

                return false;
            }

            function dragLeave(e) {
                this.classList.remove('over');
            }

            function drop(e) {
                if (dragSrcEl !== this) {
                    dragSrcEl.innerHTML = this.innerHTML;
                    this.innerHTML = e.dataTransfer.getData('text/html');
                }

                return false;
            }

            function dragEnd(e) {
                const draggables = document.querySelectorAll('.draggable');

                for (let i = 0; i < draggables.length; i++) {
                    draggables[i].classList.remove('over');
                    draggables[i].style.opacity = '1';
                }
            }


        </script>
        <!-- Footer -->
        <?php include "./directive/footer.php" ?>   
    </div>
</body>

</html>