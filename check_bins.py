import ROOT
import sys

def check_hists():
    # ref_filename = "/cvmfs/atlas-nightlies.cern.ch/repo/data/data-art/InDetTrackPerfMon/EFTrackRefereceHistograms//IDTPM.C000_FS.ttbar_pu200.HIST.root"
    ref_filename = "/eos/user/j/jlai/idtpm_validation/build/ref/IDTPM.C100_FS.ttbar_pu200.HIST.root"
    mon_filename = "IDTPM.C100_FS.ttbar_pu200.HIST.root"

    ref_file = ROOT.TFile.Open(ref_filename, "READ")
    mon_file = ROOT.TFile.Open(mon_filename, "READ")

    if not ref_file or not mon_file:
        print("Error: Could not open one or both ROOT files.")
        sys.exit(1)

    print("Scanning for discrepancies in binning, bounds, entries, and data min/max...\n")

    def scan_dir(ref_dir, mon_dir, path=""):
        for key in ref_dir.GetListOfKeys():
            name = key.GetName()
            ref_obj = key.ReadObj()
            
            mon_obj = mon_dir.Get(name) if mon_dir else None
            
            if not mon_obj:
                continue
                
            full_path = f"{path}/{name}" if path else name

            # If it's a directory, recurse deeper
            if ref_obj.InheritsFrom("TDirectory"):
                if mon_obj.InheritsFrom("TDirectory"):
                    scan_dir(ref_obj, mon_obj, full_path)
                    
            # If it's a 1D or 2D histogram, check properties
            elif ref_obj.InheritsFrom("TH1"):
                if mon_obj.InheritsFrom("TH1"):
                    ref_bins = ref_obj.GetNbinsX()
                    mon_bins = mon_obj.GetNbinsX()
                    
                    ref_min = ref_obj.GetXaxis().GetXmin()
                    mon_min = mon_obj.GetXaxis().GetXmin()
                    
                    ref_max = ref_obj.GetXaxis().GetXmax()
                    mon_max = mon_obj.GetXaxis().GetXmax()
                    
                    ref_entries = ref_obj.GetEntries()
                    mon_entries = mon_obj.GetEntries()
                    
                    # Get data minimum and maximum (bin contents)
                    ref_data_min = ref_obj.GetMinimum()
                    mon_data_min = mon_obj.GetMinimum()
                    
                    ref_data_max = ref_obj.GetMaximum()
                    mon_data_max = mon_obj.GetMaximum()
                    
                    mismatch = False
                    flags = []
                    
                    if ref_bins != mon_bins or ref_min != mon_min or ref_max != mon_max:
                        mismatch = True
                        flags.append("Binning/Bounds")
                    if ref_entries != mon_entries:
                        mismatch = True
                        flags.append("Entries")
                    if ref_data_min != mon_data_min or ref_data_max != mon_data_max:
                        mismatch = True
                        flags.append("Data Min/Max")
                        
                    if mismatch:
                        flag_str = " & ".join(flags)
                        print(f"Mismatch in: {full_path} [{flag_str}]")
                        print(f"  IDTPM (Official, Ref) : {ref_bins} bins, bounds [{ref_min}, {ref_max}], Entries: {ref_entries}, Data Min/Max: [{ref_data_min}, {ref_data_max}]")
                        print(f"  IDTPM (Mine, Mon) : {mon_bins} bins, bounds [{mon_min}, {mon_max}], Entries: {mon_entries}, Data Min/Max: [{mon_data_min}, {mon_data_max}]\n")

    scan_dir(ref_file, mon_file)
    
    ref_file.Close()
    mon_file.Close()

if __name__ == "__main__":
    # Prevent ROOT from hijacking command-line arguments
    ROOT.PyConfig.IgnoreCommandLineOptions = True
    check_hists()