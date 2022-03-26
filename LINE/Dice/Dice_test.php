<?php
a="abcdefghijklmnopqrstuvwxyz"
b="ɾ⦣ᶖ⟍̅ᒷ⎓˧⍑¦⫶ꖌꖎᒲ⧶੭ⅰ!ᑑ∷ᓭ⅂⚍⍊∴˙⧸ǁሰ"
c=input("Type it out:")
d=""
for i in range(len(c)-1):
   if c[i] in a:
      for j in range(len(a)-1):
        if a[j]==c[i]:
            d+=b[j]
   elif c[i] in b:
      for j in ange(len(b)-1)
        if b[j]==c[j]:
            d+=a[j]
   else:
       d+=c[i]
print(d)
?>
