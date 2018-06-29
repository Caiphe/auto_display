<!DOCTYPE html>
<html>
<style>
.tooltip {
    position: relative;
    display: inline-block;
    //border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 100%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color:  transparent #555 transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>
<body style="text-align:center;">

<br><br><br><br>
<div class="tooltip">This tooltip
  <span class="tooltiptext">ID number Required</span>
</div>

</body>
</html>
