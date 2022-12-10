@echo off
set mediainfo=%~dp0mediainfo.exe
set output=%~d1%~p1%~n1.json
%mediainfo% %1 --output=JSON > %output%
echo Output file: %output%