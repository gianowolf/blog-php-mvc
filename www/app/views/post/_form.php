<form style="display:flex;flex-direction:column;margin:2rem;" action="add_post" method="post">
    <input type="hidden" name="user_id" value="1">
    <label for="title">Title</label>
    <input type="text" name="title" id="1">
    <label for="subtitle">Subtitle</label>
    <input type="text" name="subtitle" id="2">
    <label for="image">Image URL (Unsplash)</label>
    <input type="url" name="image" src="" alt="">
    <label for="body">Insert text in Markdown syntax</label>
    <textarea style="height:20rem"name="body" id="body" cols="30" rows="30"></textarea>
    <button style="width:30%; height: 3rem; background-color: #222; color:white;" type="submit">Publicar</button>
</form>