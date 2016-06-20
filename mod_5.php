<html>
<head>
<title>
Module 5: Software Security
</title>
<?php include 'header.php'; ?>
<link rel="stylesheet" type+"text/css" href="mod_1_style.css" />
</head>
<body>
<div class="first"><h1>Module #5</h1>
<h2>Software Security</h2>
<p>Security is one of the most important issues in the computer field. Security challenges are frequently software problems. The weak points are the applications at the ends of the communications link and therefore represent the points of greatest vulnerability to attack.</p>
<p>Three trends are often cited as introducing security risks into systems and contributing to the magnitude of the security problem today.
<ul>
<li>The increasing <u>complexity</u> of systems make them more difficult to understand and hence more difficult to secure.</li>
<li>Increasing access to applications through various computer <u>network technologies</u> adds considerably to the security risks.</li>
<li>Software is being increasingly designed to be <u>extensible</u> with the incremental addition of functionality making it impossible to anticipate the kind of updates that may be downloaded.</li>
</ul></p><br>
<h3>Can Security be Defined?</h3>
<p>Security is a relative quantity and 100% security is unachievable. </p>
<h3>Approaches to the Security Problem</h3>
<p><u>Penetrate and Patch</u>
<br>Often software is developed in a highlt compressed schedule in order to be first to market. When vulnerabilities are found, frequently as a result of attack, patches are developed and issued to the user community. There are many problems with this approach, a few have been displayed below:</p>
<p><ul>
<li>Developers can only patch problems which they know about. Attackers may find problems that they never report to developers.</li>
<li>Patches are rushed out as a result of market pressures on vendors, and often introduce new problems of their own to a system.</li>
<li>Patches often only fix the symptom of a problem, and do nothing to address the underlying cause.</li>
<li>Patches often go unapplied, because system administrators tend to be overworked and often do not wish to make changes to a system that works. It should also be noted that system administrators are often not security experts. </li>
</ul></p><br><br><br><br><br>
<p><u>Build Security into the Software Development Life Cycle</u>
<br>The recommended approach is to incorporate software security as an engineering goal  throughout the software engineering life cycle. Since many of the issues of software security are issues of risk management, the spiral model of software development is often mentioned as appropriate, with the repetitive spiral refining and converging security considerations toward the final goal.  Some activities that should be added to each life cycle stage are listed below. </p>
<p> Requirements: Add security specifications.</p>
<p>Design: Develop threat models by viewing the system form an adversary's perspective and apply security design principles.</p>
<p>Implementation: Add secure coding standards and language subsets.</p>
<p>Testing: Add security test plans and use random input testing (e.g. Fuzz Testing or vulnerability analysis using penetration testing)</p>
<h3>Principles for Software Security</h3>
<p>It has been said that 90% of security problems can be avoided if the following principles are followed:
<ul>
<li>Secure the weakest link: security is a chain</li>
<li>Practive defence in depth: manage risk with diverse defensive strategies</li>
<li>Fail securely: Failures are unavoidable and should be planned for</li>
<li>Follow the principle of least privilege: minimum access required to perform an operation and only for the minimum time necessary</li>
<li>Compartmentalise: minimise the amount of potential damage by organising the system into the smallest number of units as possible. </li>
<li>Keep it simple</li>
<li>Promote privacy</li>
<li>Remember that hiding secrets is inherently difficult</li>
<li>Be reluctant to trust: Servers should be designed to distrust clients and conversely.</li>
<li>Use your community resources: Use security libraries and cryptographic algorithms that have been widely used and evaluated.</li>
</ul></p>
<h3>Some important Specific Software Security Issues</h3>
<p><u>Language Selection</u>
<br> Many factors influence the choice of a programming language to use for implementation. It is common for efficiency considerations to dominate the language selection process. One of the factors should be security considerations. For example, choosing the C programming language for efficiency should take into account the inherent security risks associated with a language that has no bounds checks on array and pointer references. The programmer must build these checks into the program code. C program efficiencies and low-level data manipulation capabilities come at the high risk of security vulnerabilities and very special diligence is required. Using a language like Java can greatly reduce these risks, since it performs bounds checking. However, the system requirements must tolerate a lower level run-time performance for this to be a viable option.</p>
<p><u>Buffer Overflows</u>
<br>Buffer Overflows as a security vulnerability have been discussed for 40 years and remains one of the most frequently reported instances of system attacks. A buffer overflow is a condition caused by a write operation into a fixed-size buffer in which the size of the data is larger than the size of the buffer. Most buffer overflows are the result of the properties of the C language mentioned in the last section above. This is the case with C++ as well.</p>
Some other info you probs need </p>
</div>
</body>
</html>