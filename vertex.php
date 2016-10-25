<script type="x-shader/x-vertex" id="vertex_shader">
uniform vec3 iResolution;varying vec2 a,b;void main(){b=uv;a=vec2(uv.x*iResolution.x,uv.y*iResolution.y);gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1);}
</script>