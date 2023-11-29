{{-- Main block --}}
<div class="container">
    {{-- Add new note --}}
    <div class="left">
        <form>
            <label for="title">Antraštė</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="message">Žinutė</label><br>
            <textarea id="message" name="message" rows="15"></textarea><br>
            <label for="date">Atlikti iki:</label><br>
            <input type="date" id="date" name="date"><br>
            <button type="submit">Išsaugoti</button><br> 
        </form>
    </div>
    {{-- List of added notes --}}
    <div class="right">
        
    </div>


</div>