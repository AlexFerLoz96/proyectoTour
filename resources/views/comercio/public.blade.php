<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
html,body {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    height: 100%;
    max-width:100%;
    
}       
#tilt {
    z-index:2;
    background-color:black;
    width: 30rem;
    height: 15rem;

    transition: box-shadow 0.1s, transform 0.1s;

  
}

#tilt:hover {
  box-shadow: 0px 0px 30px rgba(0,0,0, 0.6);
  cursor: pointer;
}
    </style>
</head>

<body>



    <div id="tilt">
        <!--  Container for our block  -->
    </div>


    <script>

        /* Store the element in el */
        let el = document.getElementById('tilt')

        /* Get the height and width of the element */
        const height = el.clientHeight
        const width = el.clientWidth

        /*
        * Add a listener for mousemove event
        * Which will trigger function 'handleMove'
        * On mousemove
        */
        el.addEventListener('mousemove', handleMove)

        /* Define function a */
        function handleMove(e) {
            /*
            * Get position of mouse cursor
            * With respect to the element
            * On mouseover
            */
            /* Store the x position */
            const xVal = e.layerX
            /* Store the y position */
            const yVal = e.layerY

            /*
            * Calculate rotation valuee along the Y-axis
            * Here the multiplier 20 is to
            * Control the rotation
            * You can change the value and see the results
            */
            const yRotation = 20 * ((xVal - width / 2) / width)

            /* Calculate the rotation along the X-axis */
            const xRotation = -20 * ((yVal - height / 2) / height)

            /* Generate string for CSS transform property */
            const string = 'perspective(500px) scale(1.1) rotateX(0deg) rotateY(' + yRotation + 'deg)'

            /* Apply the calculated transformation */
            el.style.transform = string
        }

        /* Add listener for mouseout event, remove the rotation */
        el.addEventListener('mouseout', function () {
            el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)'
        })

        /* Add listener for mousedown event, to simulate click */
        el.addEventListener('mousedown', function () {
            el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)'
        })

        /* Add listener for mouseup, simulate release of mouse click */
        el.addEventListener('mouseup', function () {
            el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)'
        })



    </script>

</body>

</html>