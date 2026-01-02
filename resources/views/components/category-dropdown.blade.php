<div>
   <div class="mb-4">
    <label for="category" class="block mb-2 font-bold text-gray-700 dark:text-gray-300">Category</label>
    <select name="category" id="category"
        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{$category->id == $project->category_id ? "selected" : ""}}>{{
            $category->name }}</option>
        @endforeach
       
    </select>

</div>



</div>