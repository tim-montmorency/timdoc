@echo off
set ffmpeg="%~dp0ffmpeg.exe"
set mediainfo="%~dp0mediainfo.exe"

set jpegoutput="%~d1%~p1%~n1.jpg"
set jsonoutput="%~d1%~p1%~n1.json"

echo Output JSON: %jsonoutput%
%mediainfo% %1 --output=JSON > %jsonoutput%

echo Output JPEG: %jpegoutput%
%ffmpeg% -hide_banner -loglevel error -ss 1 -y -i %1 -an -vframes 1 %jpegoutput%
