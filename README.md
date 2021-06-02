# FEUERWASSER RangeSlider (frwssr_rangeslider)
A field type for displaying an **Ion.RangeSlider**-powered range slider (well,…of course 😋) in [PerchCMS](https://grabaperch.com/).  

## Installation

1. Download zip archive and extract locally.
2. Create a `frwssr_rangeslider` folder in the `/perch/addons/fieldtypes/` folder of your Perch install.
3. Copy the files `frwssr_rangeslider.class.php`, `init.js`, `ion.rangeSlider.min.css` and `ion.rangeSlider.min.js` to the `/perch/addons/fieldtypes/frwssr_rangeslider` folder.

## Usage
In a perch template, you can use this field type as follows:
```html
<perch:content id="range" type="frwssr_rangeslider">
```

### Attributes
- *min* - Set the lower boundary of the slider. Defaults to `0`.
- *max* - Set the upper boundary of the slider. Defaults to `10`.
- *from* - Set the initial lower value of the slider. Defaults to `4`.
- *to* - Set the initial upper value of the slider. Defaults to `6`.
- *step* - Set the steps of the slider. Defaults to `1`.

### Example
```html
<perch:content id="range" type="frwssr_rangeslider" label="Range" min="0" max="13" from="1" to="4" step="1">
```

### Notes
- All attributes accept integers and floats. Just make sure, that the type is the same on every attribute. Otherwise the slider might break.
- Even, if lower and upper value are both set to the lower boundary, a value will be assigned to the input field. If you do not wish the value to show in that case, wrap the field in a `perch:if` statement like so (making sure, the value in it is set to your `min` in the format `{value};{value}`):  
`<perch:if id="range" match="neq" value="0;0"><perch:content id="range" type="frwssr_rangeslider" label="Range" min="0" max="13" from="1" to="4" step="1"></perch:if>`
- Only a subset of the **Ion.RangeSlider** plugin’s settings are supported by this fieldtype. Reach out to me, if you need more functionality.
- This fieldtype was developed under Perch (Standard) Version 3.2 on a server running PHP 7.4.x.  
**Use at own risk!**


# Credits
This project makes use of the fantastic **Ion.RangeSlider** plugin from [Denis Ineshin](https://twitter.com/IonDen666). For more details and licence info, please visit the plugin website at [http://ionden.com/a/plugins/ion.rangeSlider/](http://ionden.com/a/plugins/ion.rangeSlider/).

# License
This project is free, open source, and GPL friendly. You can use it for commercial projects, for open source projects, or for almost whatever you want, really.

# Donations
This is free software, but it took some time to develop. If you use it, please let me know—I live off of positive feedback…and chocolate.
If you appreciate the fieldtype and use it regularly, feel free to [buy me some sweets](https://paypal.me/nlsmlk).

# Issues
Create a GitHub Issue: [github.com/frwssr/frwssr_rangeslider/issues](https://github.com/frwssr/frwssr_rangeslider/issues) or better yet become a contributor.

Developer: Nils Mielke (nils.m@feuerwasser.de, [@nilsmielke](https://twitter.com/nilsmielke)) of [FEUERWASSER](https://www.feuerwasser.de) ([@frwssr](https://twitter.com/frwssr))