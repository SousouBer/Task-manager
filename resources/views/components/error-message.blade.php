@props(['name'])

@error($name)
 <p class="text-xs px-4 py-3" style="color: #e91818">{{ $message }}</p>
@enderror
