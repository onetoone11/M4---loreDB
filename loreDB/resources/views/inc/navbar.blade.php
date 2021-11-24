<nav id="header" class="border">
    <input type="checkbox" id="sidebarToggle"> 
    <label id="hamburger" for="sidebarToggle"><img src="assets/hamburger.svg" alt="hamburg"></label>
    <p id="title" class="fill">{{ config('app.name', 'LoreDB') }}</p>
</nav>
<nav id="sidebar" class="border">
    <a href="/" id="homeBtn">Home</a>
    <a href="/createuni" id="createuniBtn">Create New</a>
    {{-- <a href="" id="contentBtn">Content</a> --}}
    <a href="/about" id="aboutBtn">About</a>
</nav>