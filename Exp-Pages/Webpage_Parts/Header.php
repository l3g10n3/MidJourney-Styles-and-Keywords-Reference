<?php
echo '
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="/styles.css">

    <div class="head-title">
        <div align="center">
            <img class="title-img" src="https://user-images.githubusercontent.com/6042799/178131414-93171289-16ae-46a5-ab51-8077944c392d.png" />
        </div>

        <div class="dropdown">
            <button onclick="window.location.href=\'https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/index.html\';">🏠 Home</button>
            <button onclick="window.location.href=\'https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Pages/Control_Image.html\';">⚪ Control Image</button>
            <button class="dropdown-links" onmouseenter="openMenuDropdown(event, \'Styles\')" onmouseleave="closeMenuDropdown(event)">🎨 Styles</button>
            <button class="dropdown-links" onmouseenter="openMenuDropdown(event, \'Comparison Pages\')" onmouseleave="closeMenuDropdown(event)">🎛 Comparison Pages</button>
            <button onclick="window.location.href=\'https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Pages/How-To_Guide.html\';">❔ How-To Guide</button>
            <button onclick="window.location.href=\'https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Pages/Links.html\';">🔗 Links To Other Resources</button>
        </div>

        <div id="Styles" class="dropdown-content" onmouseleave="closeMenuDropdown(event)">
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Themes_and_Design_Styles.html">
                🖼 Themes and Design Styles
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Artists.html">
                📔 Artists
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Drawing_and_Art_Mediums.html">
                🖌 Drawing and Art Mediums
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Materials.html">
                🧱 Materials
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Material_Propertieshtml">
                📦 Material Properties
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Lighting.html">
                💡 Lighting
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Colors.html">
                🎨 Colors
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Color_Palettes_and_Color_Styles.html">
                🎨 Palettes and Color Styles
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/SFX_and_Shaders.html">
                🌈 SFX, Post-Processing, and Shaders
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Computer_Display.html">
                🖥 Computer Display and Color Models
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Camera.html">
                📷 Camera, Film Types, Lenses, and Perspective
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Dimensionality.html">
                🌌 Dimensionality
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Geometry.html">
                💠 Geometry, Topology, and Structural Modification
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Intangibles.html">
                ➰ Intangibles
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/TV_and_Movies.html">
                🎬 TV Shows and Movies
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Experimental.html">
                🧪 Experimental
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Styles/Miscellaneous.html">
                🎛 Miscellaneous
            </a>
        </div>

        <div id="Comparison Pages" class="dropdown-content" onmouseleave="closeMenuDropdown(event)">
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/Prompt_Format_Comparison.html">
                ⌨ Prompt Format Comparison
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/Text_In_Image_Comparison.html">
                🔠 Text In Image Comparison
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/no_Parameter.html">
                🚫 --no Parameter
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/Image_Upscale_Comparison.html">
                🚀 Image Upscale Comparison
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/Image_Resolution_Comparison.html">
                📏 Image Resolution Comparison
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/.html">
                🎛 Image Algorithm Comparison
            </a>
            <a href="https://willwulfken.github.io/MidJourney-Styles-and-Keywords-Reference/Comparison_Pages/Image_Weight_Comparison.html">
                🏋️‍ Image Weight Comparison
            </a>
        </div>
    </div>
';
?>
</html>