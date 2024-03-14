@props(['name'])

@error($name)
 <p class="text-xs px-4 pt-2" style="color: #e91818">{{ $message }}</p>
@enderror
