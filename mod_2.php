<html>
<head>
<title>
Module 2: Software Process Models
</title>
<?php include 'header.php'; ?>
<link rel="stylesheet" type+"text/css" href="mod_1_style.css" />
</head>
<body>
<div class="first"><h1>Module #2</h1>
<h2>Software Process Models</h2>
<h3>The Waterfall Model</h3>
<p>It is a simple linear model that is considered a 'first approximation' of the activities needed.
 Some versions provide feedback loops from each stage to the previous ones.
 This method can only be used when all the customer requirements are known at the beginning of the project.
 One problem of the waterfall method is that a working version of the system is only available late in the project.</p>
<img src="waterfall.jpg" alt="The Waterfall Method Process" width="210" height="210" 
title="The Waterfall Process Method"/>
<br />
<h3>Incremental Process Models</h3>
<p>This builds on the waterfall method by adding incremental iteration processes.
 This means that each function of the system can be treated as a separate system and developed in accordance with the waterfall model.
 This means that the system can be delivered to the customer incrementally with each function delivered initially as a separately operating function.</p>
<p>Anoter method that uses increments is Rapid Application Development (RAD).
 It applies the software specification stage to the entire system but for software design and implementation stages the system is divided into team projects to enable development time to be scaled down to the range of two to three months.
 To use this method, the system must be able to be modularized and the customers developers must be prepared for the rapid pace.</p>
<h3>Evolutionary Process Models</h3>
<p>These models develop the final software system by iterative cumulative development.
 <b>Rapid Prototyping</b> is sometimes used at the beginning of projects to improved the understanding of the customer requirements.
 The prototype produced could either be a throw-away or extended to develop the entire system.
 <b>The Spiral Model</b> combines elements of the waterfall model and rapid prototyping to implement evolutionary development as shown in the diagram below.
 Each path around the spiral represents a new more complete version of the system with a risk assessment each time around.
 Each version can be viewed as a system prototype during any phase of the evolutionary development.
<img src="evolutionary.jpg" alt="Evolutionary Process Model" width="210" height="210" 
title="The Evolutionary Process Method"/><br>
<p> In the <b>Concurrent Development Model</b>, all the activities in the process model exist concurrently in different states, for example, 'awaiting changes', 'none' and 'under development'. 
This model descibes the software process to be implemented as a network of activities rather than a simple linear process.
<b>Component-Based Development</b> uses off-the-shelf software packages as the defining characteristic of the process.
This is a software reuse approach and often leads to large reductions in cost and development time but depends on the nature and wuality of the components library available.</p>
<h3>Clean Room Software Engineering</h3>
<p>This model uses formal methods in design and serves as the basis for identifying errors that might not be detected during the testing phase.
This requires special mathematical skills and produces difficulties in communication to the customers.
More details can be found <a href="http://www.dacs.dtic.mil/databases/url/key.hts?keycode=64">here.</a></p>
<h3>Aspect-Oriented Software Development (AOSD)</h3>
<p>AOSD is a new concept intended to model localised features, functions and information content that have impact across the software system.
It is sometimes referred to as crosscutting concerns that go beyond mechanisms such as subroutines.
Details on this new model are available <a href="http://aosd.net">here. </a></p>
<h3>Agile Development</h3>
<p>This is a method to compress and overlap the traditional life cycle phases as much as possible with close customer partnership.
For more details on philosophy, see <a href="http://www.agilemanifesto.org">this</a>.<br>
The main objective is rapid time to delivery. "Extreme Programming" is also a term that is associated with this strategy.
Some say that agile development models are appropriate for web applications developers, a group that has tended to resist the discipline of software processes.</p>
 </div>
</body>
</html>